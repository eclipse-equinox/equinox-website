<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");  $App    = new App();    $Nav    = new Nav();    $Menu   = new Menu();       include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

    #*****************************************************************************
    #
    #
    #****************************************************************************
    
    #
    # Begin: page-specific settings.  Change these. 
    $pageTitle      = "Equinox Incubator - Console supportability user documentation";
    $pageKeywords   = "equinox, osgi, framework, console, shell, incubator, gogo, RFC 147, ssh, command completion, documents";
    
    # Add page-specific Nav bars here
    # Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
    # $Nav->addNavSeparator("My Page Links",    "downloads.php");
    # $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
    # $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

    # End: page-specific settings
    #
        
    # Paste your HTML content between the markers!  
ob_start();
?>      

    <div id="midcolumn">
        <h1><?= $pageTitle ?></h1>

            <p class=bar>General features</p>
            The new console is based on Apache Felix Gogo shell, which is the reference implementation of RFC 147 - the Command Line Interface specification in OSGi. The new console provides:
            <ul>
                <li>support for the ssh protocol (in addition to the telnet connectivity)</li>
                <li>JAAS-based user authentication</li>
                <li>improved tab completion</li>
            </ul>
            The default authentication is password-based.
            
            <p class=bar>Installation and configuration of the console</p>
            
            <ol>
                <li>Place the necessary bundles in a folder. The bundles are:
                    <ul>
                        <li>org.apache.felix.gogo.command-0.8.0.jar</li>
                        <li>org.apache.felix.gogo.runtime-0.8.0.jar</li>
                        <li>org.apache.felix.gogo.shell-0.8.0.jar</li>
                        <li>org.eclipse.equinox.console.jaas.fragment.jar</li>
                        <li>org.eclipse.equinox.console.supportability.jar</li>
                        <li>org.eclipse.osgi.jar</li>
                        <li>sshd-core-0.5.0.jar</li>
                        <li>mina-core-2.0.2.jar</li>
                        <li>slf4j-api</li>
                        <li>some slf4j-api implementation</li>
                    </ul>
                </li>
                
                <li>Create a <b>configuration</b> subfolder and a <b>config.ini</b> file in it.</li>
                
                <li>Add the following entries in the <b>config.ini</b> file: <br />
                    <code>
                    osgi.bundles=./org.apache.felix.gogo.runtime-0.8.0.jar@start,\ <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;./org.apache.felix.gogo.command-0.8.0.jar@start,\ <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;./org.apache.felix.gogo.shell-0.8.0.jar@start,\ <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;./slf4j-api-&lt;version&gt;.jar@start,\ <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;./&lt;slf4j-api_impl&gt;.jar,\ <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;./mina-core-2.0.2.jar@start,\ <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;./sshd-core-0.5.0.jar@start,\ <br /> 
                    &nbsp;&nbsp;&nbsp;&nbsp;./org.eclipse.equinox.console.supportability.jar@start,\ <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;./org.eclipse.equinox.console.jaas.fragment.jar <br />
                    osgi.console.enable.builtin=false <br />
                    osgi.console.ssh=&lt;port&gt; <br />
                    osgi.console.ssh.useDefaultSecureStorage=true <br />
                    </code> <br />
                    If you want to use telnet instead of ssh, you have to specify the property <code>osgi.console=&lt;port&gt;</code> instead of <code>osgi.console.ssh</code> in the <b>config.ini</b> file.
                    For both properties, you can also specify the host: <br />
                    <code>
                    osgi.console=&lt;host&gt;:&lt;port&gt; <br />
                    osgi.console.ssh=&lt;host&gt;:&lt;port&gt; <br />
                    </code>
                    where &lt;host&gt; is either <b>localhost</b> or <b>127.0.0.1</b>, so that the console listens for telnet connections only from the localhost. <br />
                    You can use both telnet and ssh. For this you have to specify both properties.
                </li>
                
                <li>Create a file with name <b>org.eclipse.equinox.console.authentication.config</b> in the <b>configuration</b> subfolder.</li>
                
                <li>Add the following entry to <b>org.eclipse.equinox.console.authentication.config</b> file: <br />
                    <code>
                    equinox_console { <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;org.eclipse.equinox.console.jaas.SecureStorageLoginModule REQUIRED; <br />
                    }; <br />
                    </code>
                </li>
                
                <li>Create logging configuration file. This depends on the particular implementation of slf4j-api, which you have chosen.</li>
                
                <li>Start the Equinox framework with the following command line:
                    <code>
                    java -Djava.util.logging.config.file=configuration/logging.properties \ <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;-Dssh.server.keystore=configuration/hostkey.ser \ <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;-Dorg.eclipse.equinox.console.jaas.file=configuration/store \<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;-Djava.security.auth.login.config=configuration/org.eclipse.equinox.console.authentication.config \<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;-jar org.eclipse.osgi.jar <br />
                    </code>
                </li>
            <ol>
            
            <b>Notes:</b>
            <ul>
                <li>The property <code>osgi.console.enable.builtin=false</code> disables the Equinox built-in console. It must be disabled in order for the new console to work properly.</li>
                <li>The bundles org.eclipse.equinox.console.jaas.fragment.jar, slf4j-api-&lt;version&gt;.jar, &lt;slf4j-api_impl&gt;.jar, sshd-core-0.5.0.jar, mina-core-2.0.2.jar are optional and are necessary only if ssh support is required. If ssh is not used, these bundles are not necessary. If the ssh bundles are not used, they should not be included in the <b>config.ini</b> file.</li>
                <li>The version of slf4j-api must be in the range [1.5,2]</li>
                <li>The property <code>osgi.console.ssh.useDefaultSecureStorage</code> is necessary only if ssh is used and the default login mechanism is used (i. e., a custom login module is not provided)</li>
                <li>The configuration file <b>org.eclipse.equinox.console.authentication.config</b> may have a different name, but its name must be given as a value of the property <code>-Djava.security.auth.login.config</code> accordingly.</li>
                <li>You can download the three Gogo bundles and slf4j-api from <a href="http://download.eclipse.org/tools/orbit/downloads/">Eclipse Orbit repository</a>.</li>
                <li>You can use org.slf4j.log4j from <a href="http://download.eclipse.org/tools/orbit/downloads/">Eclipse Orbit repository</a>. Other implementations also may be used.</li>
                <li>All configuration files, excluding <b>config.ini</b>, may be placed in a folder, different from the configuration subfolder. In this case the VM properties must be changed respectively to point to the correct folder.</li>
            </ul>
                       
            <p class=bar>JAAS Authentication</p> 
            The new console uses JAAS authentication when the SSH is used. The default JAAS login module, implemented in the console, uses custom store file,
            where it stores users and passwords. The passwords are one-way encrypted. The console also provides shell commands for administering users:
            <ul>
                <li>add user</li>
                <li>delete user</li>
                <li>list users</li>
                <li>reset user password</li>
                <li>change user password</li>
                <li>add user roles</li>
                <li>remove user roles</li>
            </ul>
            There is a default user <b>equinox</b> with password <b>equinox</b>, which is dynamically created when the ssh starts if no other user exists
            in the user store. Upon first login, the console prompts the user to create a new user, and automatically deletes the default user. 
            Currently only authentication is implemented in the console. All authenticated users have similar rights. Implementing authorization may
            be a future enhancement. That is why roles are introduced, although they are not currently used.
            If the default JAAS login module is be used, then the property <code>osgi.console.ssh.useDefaultSecureStorage</code> must be set to
            <code>true</code>. The file, where the users are stored, is specified through the property <code>org.eclipse.equinox.console.jaas.file<code>
            
            <p class=bar>Using Custom JAAS Authentication Login Module</p>
            Custom JAAS authentication login modules could be used with the ssh instead of the default one. If a custom login module is used,
            then the property <code>osgi.console.ssh.useDefaultSecureStorage</code> must not be set at all. The custom module must be specified 
            in the file <code>org.eclipse.equinox.console.authentication.config</code> instead of the default entry there, or in a different file.
            If a different file is used, then its name must be specified as the value of the property <code>-Djava.security.auth.login.config</code>
            instead of <code>org.eclipse.equinox.console.authentication.config</code>.
            Also, it will be necessary to create a fragment to sshd-core bundle, with which to import the package of the custom login module. This is necessary
            for the sshd to be able to load the module class.
                
            <p class=bar>Configuring of telnet and ssh host and port through Configuration Admin service</p>
            The console provides the option to configure the telnet and ssh host and port through Configuration Admin instead of
            through the properties <code>osgi.console=&lt;host&gt;:&lt;port&gt;</code> and <code>osgi.console.ssh=&lt;host&gt;:&lt;port&gt;</code>.
            This could be helpful in more complex scenarios, for example when you want to run different instances of the console in different subsystems of the 
            framework. In this case if the port is configured through a system property, it is one and the same for all console instances and only one 
            will be able to bind to the socket. 
            If this feature is used, then you should:
            <ul>
                <li>set the property <code>osgi.console.useConfigAdmin</code> to <code>true</code></li> 
                <li>install and start, along with the console bundles, the org.eclipse.equinox.cm bundle and its dependencies</code>
                <li>write a bundle to provide the configuration with the telnet and ssh properties 
            </ul>
            
            The configuration PID for the telnet configuration is <code>osgi.console.telnet</code> and for the ssh configuration is <code>osgi.console.ssh</code>. 
            Both configurations have the following two properties:
            <ul>
                <li><code>host</code></li>
                <li><code>port</code></li>
            </ul>
            Both must have values of type String.
            
            <p class=bar>Using Commands</p>
            The Gogo shell, on which the new console is based, supports different type of commands from these currently supported in Equinox. Currently in Equinox,
            commands are provided by a class implementing the <code>CommandProvider</code> interface. The new console provides an adapter from this type of commands
            to the new type of commands, used in Gogo and specified in RFC 147. The RFC 147 commands are arbitrary classes, registered as services, with two special 
            properties:
            <ul>
                <li><code>osgi.command.scope</code> - specifies the scope of the command</li>
                <li><code>osgi.command.function</code> - specifies the commands provided by this service; this is a list of the names of public methods in the service class, which must be available for execution as commands</li>
            </ul>
            The commands in the new console use the notion of command scope. The scope can be used, for example,
            to differentiate between commands with one and the same name, but provided by different providers. Then they should have different scopes. <br />
            The scope is a prefix of the command name, separated from it with a column. When writing the command in the console, the scope may or may not be specified.
            If the scope is not specified, then the command with this name from the default scope is used. If in the default scope there is no command with such name,
            all commands are searched. <br />
            If there is more than one command with the specified name in different scopes, it is not guaranteed which one will be actually
            executed. Therefore, if you know that there are commands with the same name but different scopes, you must explicitly prefix the command name with the 
            scope to ensure that you will get executed exactly the command you want. <br />
            The legacy commands, adapted by the new console, have scope <code>equinox</code>. 
            
            <p class=bar>Getting Help for Commands</p>
            The default help command in Gogo lists the names of the registered commands, and if it is called with a command name as an argument, it displays help message for the 
            specified command. The default help command does not provide help for the legacy Equinox command, which are adapted by the new console. For this reason the 
            new console provides its own help command, which calls the default help, but accepts an additional optional argument, <code>-legacy</code>. <br />
            If this argument is specified, then all command names - both legacy and new - are listed. <br />
            If this option is specified and a command name is passed as an argument, then help message for the particular legacy command is displayed. <br />
            If the <code>CommandProvider</code>, which provides this command, does not provide separate help for each command
            (this is a new feature, introduced in Equinox 3.7), then the help messages for all commands in this <code>CommandProvider</code> are displayed. <br />
            The help command, provided by the new console, should be explicitly scoped, as in <code>equinox:help</code>. <br />
            Currently there is no <code>man</code> command. Help command should be used instead.
            
            <p class=bar>Writing RFC 147 Commands</p>
            Writing RFC 147 commands is easy. You have to do the following:
            <ul>
                <li>Write your class with all commands you want implemented as public methods. Methods may have arbitrary arguments. Also, unlike Equinox command providers, in RFC 147 there is no interface that the class of the command provider should implement.</li>
                <li>Register the command provider as a service with the two properties, described above.</li>
            </ul>
            Something new for the RFC 147 commands are the converters and formatters. <br />
            The converter is a class which converts the arguments, passed on the command line, to the actual arguments, 
            which the command accepts. For example, the command may have one argument of type <code>Bundle</code>. There may be a converter, which from a long finds the bundle with this id. 
            Then the command may be called with the ID of the bundle as an argument, the converter will convert it to the corresponding <code>Bundle</code> object and the command method will
            be called with this object as an argument.  <br />
            The formatter is a class which displays the result, returned by the command method. <br />
            For more information on RFC 147 commands, you can check the <a href="http://felix.apache.org/site/rfc-147-overview.html">Gogo documentation</a>.
            
            <p class=bar>Tab Completion</p>
            The console provides tab completion. This feature is available only when connecting through telnet or ssh. <br />
            Completion is available for:
            <ul>
                <li>command names</li>
                <li>variable names - these must be previously defined in the session; variable names may be passed as command arguments</li>
                <li>file names - passed as command arguments</li>
            </ul>
            When the <code>tab</code> key is typed, all possible candidates for completion for the current word are searched. If there is only one possible completion, 
            the current word is automatically completed. If there are more than one options, all are displayed in a column. The possible options can be iterated by hitting
            <code>tab</code> multiple times, until the desired completion candidate is reached. <br />
            If longest common prefix of all available completion candidates is longer than the current word, then the current word is completed automatically to this prefix, before choosing
            the final completion. For example, if we have the following available completions for the word <code>bun</code>:
            <ul>
                <li>bundles</li>
                <li>bundle</li>
                <li>bundlelevel</li>
            </ul>
            the current word is completed automatically to <code>bundle</code>, and then by hitting <code>tab</code> you can choose which completion you like, or may type it for yourself. <br />
            The console allows custom command completers to be provided. A custom completer should implement the interface <code>org.eclipse.equinox.console.common.Completer</code>, provided by 
            the bundle of the new console. It has the single method <code>getCandidates</code>, which get as a parameter the whole command line and the current cursor position in it, and returns
            a map with all completion candidates, and the position in the command line, on which the completion begins. The keys in the map are the candidates, and the values - the start position
            for the completion.
            
            <p class=bar>Closing Telnet or Ssh Session</p>
            Currently the telnet and ssh sessions are closed by closing the console window. There is no command to close the session. Providing such command is a future enhancement.
            
            <p class=bar>Running Non-interactive Shell</p>
            In some cases you may wish to run the console without an interactive session. In this case, the console can be connected from telnet and ssh, but is not available
            on standard in and out. For this the following property should be specified: <code>-Dgosh.args=--nointeractive</code> 
            
    <p>&nbsp;</p>
    </div>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
    include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/component-links.html";
    if (file_exists("dir-links.html")) {include "dir-links.html";}
?>
<?php
    $html = ob_get_contents();
    ob_end_clean();

    # Generate the web page
    $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>