<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Equinox OSGi incubator</title>
<link rel="stylesheet" href="http://dev.eclipse.org/default_style.css" type="text/css">
<link rel="stylesheet" href="../../equinox.css" type="text/css">
</head>
<body>
<?php include("nav-include.html") ?>
<p class=bar>A comparison of AJEER and AOSGi (by Matthew Webster)</p>
<p>

I have been looking at AJEER (http://sourceforge.net/projects/ajeer) and
what the AspectJ team (http://eclipse.org/aspectj/) are currently calling
AOSGi to compare the two approaches to supporting AspectJ load-time weaving
(http://www.eclipse.org/aspectj/doc/next/adk15notebook/ltw.html) in the
OSGi/Eclipse environment. Both approaches enhance class loading at the OSGi
level (by replacing the Framework Adaptor) to facilitate byte-code
modification and allow aspects to be treated as first class entities in an
Eclipse environment. However they differ greatly in the way that aspects
are declared and how the set of bundles affected is determined. The goal of
this analysis is to develop a single implementation of AspectJ LTW in
Eclipse/OSGi.</p>

<p>
Independently of the Eclipse/OSGi environment AspectJ offers two different
models for applying aspects. Using the "opt-in" model an application
developer writes their own aspect or customizes one provided in a libarary
through the implementation of a concrete sub-aspect or using Java 5
annotations. The co-opt model allows someone other than the application
developer to write a concrete aspect that implements a platform-specific
integration feature or a problem diagnosis capability, package it in a
bundle and affect applications in the system without requiring them to be
modified in any way. Both models are supported by AspectJ load-time
weaving. Both models are applicable to the OSGi environment where an
application is represented by one or more bundles.</p>

<p>
The AJEER project offers a very simple approach to declaring aspects using
the Eclipse plug-in mechanism. One or more aspects are packaged in a bundle
and declared through an extension point provided by the weaving mechanism.
Essentially it offers a global co-op model with target classes determined
by pointcuts only. It doesn't exploit AspectJ 5 LTW configuration through
aop.xml files because it predates that mechanism.</p>

<p>
AOSGi is designed to be a natural extension to both AspectJ LTW and OSGi.
It uses AspectJ 5 aop.xml files to declare aspects and the OSGi component
model to determine the scope of any weaving. Just like AJEER aspects can be
first class entities packaged in bundle fragment or library bundles. AOSGi
supports both the co-opt and opt-in models with the latter using proposed
extensions to the current bundle manifest headers. A draft specification
that describes this in more detail is attached.</p>

<p>
I think the approaches are complementary and we should try to support both
using a single weaving runtime. This runtime will intercept class loading
for each plug-in, determine which aspects are declared to affect the
plug-in and call AspectJ to perform the necessary weaving. A optional
byte-code caching service should also be provided. We need to discuss how
to plug the different configuration mechanisms into a single weaving
runtime, possible using a OSGI service. The same applies to the byte-code
caching. Enhancments to the existing AspectJ WeavingAdaptor will be
required to override the use of aop.xml files.</p>

<p>
AOSGi - Supporting AspectJ Load-Time Weaving in OSGi</p>

<p>
Byte-code weaving is achieved by replacing the default Framework Adaptor
with one that intercepts class loading for each bundle and invokes the
AspectJ weaver. The weaver is configured using standard AspectJ 5 aop.xml
files, each packaged in the bundle containing the concrete aspects it
declares. The set of configuration files, and hence aspects, visible to a
particular bundle are determined using the normal class loader search order
for resources: ClassLoader.getResources(“aop.xml”). This means that a
bundle is only woven with aspects that are defined in bundles on which it
depends.</p>

<p>
To support the opt-in model no changes to the existing OSGi implementation
are required. An AspectJ bundle fragment is created that both defines a
concrete aspect and the accompanying aop.xml file. The aspect may extend a
super-aspect defined in another bundle in which case the fragment manifest
must include the appropriate “Require-Bundle” or “Import-Package” header.
This approach allows the host bundle to remain unchanged and the fragment
to be omitted from a deployment when the aspects it contains are not
needed. In addition if a bundle required by the fragment is not available
it will not be loaded, no weaving will occur and the host will behave as
normal. This feature is particularly useful when using optional
capabilities that may not be available in a particular installation.</p>

<p>
To use the co-opt model an aspect library bundle is created that defines
one or concrete aspects and the necessary aop.xml file. The bundle manifest
is used to declare which bundles will be affected by the aspects. The
proposal is to extend the manifest to support three new headers:</p>

<p>
<ul>
  <li>Supplement-Importer</li>
  <li>Supplement-Exporter</li>
  <li>Supplement-Bundle</li>
</ul>
</p>

<p>
These are analogous to the existing Import-Package, Export-Package and
Require-Bundle attributes, but they invert the dependency.  These
additional attributes have the following syntax and semantics:</p

<p>
Supplement-Importer: PackageSpecificationPattern [,
PackageSpecificationPattern]*
   Where PackageSpecificationPattern is any valid OSGi package
   specification (as used in an Import-Package attribute) but with the
   addition that wild cards are allowed (*,..) in the package name.</p>
   
<p>
Every bundle that imports a package matched by a
PackageSpecificationPattern in the Supplement-Importer attribute has all of
the exported packages (Export-Package:) of the supplementing bundle added
to its classpath. The semantics are the same as if the supplemented bundle
specified a Require-Bundle header naming the supplementing bundle.</p>

<p>
Supplement-Exporter: PackageSpecificationPattern [,
PackageSpecificationPattern]*</p>

<p>
Every bundle that exports a package matched by a
PackageSpecificationPattern in the Supplement-Exporter attribute has all of
the exported packages (Export-Package:) of the supplementing bundle added
to its classpath. The semantics are the same as if the supplemented bundle
specified a Require-Bundle header naming the supplementing bundle.</p>

<p>
Supplement-Bundle: BundleNamePattern [, BundleNamePattern]*
   Where BundleNamePattern is the name of an OSGi bundle (as used in the
   Require-Bundle: attribute) but with the addition that wild cards are
   allowed (.,..,*) at the end of bundle names only (e.g.
   Supplement-Bundle: org.eclipse.*)</p>

<p>
Every bundle whose name is matched by a BundleNamePattern in the
Supplement-Bundle attribute has all of the exported packages
(Export-Package:) of the supplementing bundle added to its classpath. The
semantics are the same as if the supplemented bundle specified a
Require-Bundle header naming the supplementing bundle. Note that the
supplementing mechanism will not allow a bundle to supplement itself, or
any bundles on which it depends.</p>

<p>
The affect of using one or more of these new headers is that both the
aop.xml configuration and the declared aspects contained by the library
bundle will be visible to target bundles. No changes to those bundles are
required and if the co-opting bundle is excluded from a deployment no
weaving occurs.
</p>
</body>
</html>
