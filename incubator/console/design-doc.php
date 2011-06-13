<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");  $App    = new App();    $Nav    = new Nav();    $Menu   = new Menu();       include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

    #*****************************************************************************
    #
    #
    #****************************************************************************
    
    #
    # Begin: page-specific settings.  Change these. 
    $pageTitle      = "Equinox Incubator - Console supportability design documentation";
    $pageKeywords   = "equinox, osgi, framework, console, shell, incubator, gogo, RFC 147, ssh, command completion, design, documents";
    
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

            <h2>Overall design</h2>
            
            The new console is based on Apache Felix Gogo shell, which is the reference implementation of RFC 147 - the Command Line Interface specification in OSGi.
            The purpose of the console is to extend Gogo functionality in relation to: 
            <ul>
                <li>execution of Equinox-type commands</li>
                <li>ssh and telnet connectivity</li>
                <li>JAAS-based user authentication</li>
                <li>tab completion</li>
                <li>command line editing and command history</li>
            </ul>
            The default authentication implemented for the ssh support is password-based.
            
            The console consists of the following main components:
            <ul>
                <li>Command adapter for Equinox-type commands</li>
                <li>Equinox built-in command provider, migrated to Gogo-type commands</li>
                <li>Tab completion</li>
                <li>Command line editing and history</li>
                <li>Telnet server</li>
                <li>Ssh server</li>
                <li>JAAS authentication</li>
                <li>Secure store for user information (usernames, passwords and roles)</li>
            </ul>
            
            <h2>Command Adapter for Equinox-type Commands</h2>
            
            The Gogo shell implements the RFC 147 type commands. In this specification the commands are arbitrary classes, registered as services with two special 
            properties:
            <ul>
                <li><code>osgi.command.scope</code> - specifies the scope of the command</li>
                <li><code>osgi.command.function</code> - specifies the commands provided by this service; this is a list of the names of public methods of the service class, which should be available for execution as commands</li>
            </ul>
            <p>Therefore, the Gogo shell does not recognize the Equinox-type commands, provided by a class implementing the <code>CommandProvider</code> interface. The purpose of the command adapter is to expose the Equinox-type 
            commands as Gogo commands for backwards compatibility. The new console bundle registers in its activator trackers for Equinox-type commands. When such a command is registered, the component creates a <code>CommandProviderAdapter</code> object for
            this command and registers it as a Gogo command. The <code>CommandProviderAdapter</code> exposes all methods of the Equinox <code>CommandProvider</code> as command methods (as a value of the property <code>osgi.command.function</code>).
            Then when one of these commands is called, the <code>CommandProviderAdapter</code> receives the call and delegates it to the actual <code>CommandProvider</code> object. </p>
            
            The Equinox built-in console provides <code>ConsoleSession</code>s to represent a single session to the console. Since the Gogo shell is ignorant of <code>ConsoleSession</code>s, the new console provides support for these. In its activator, it
            registers a tracker for <code>ConsoleSession</code>s, and when one is registered, it opens a Gogo <code>CommandSession</code> with the I/O streams of the registered <code>ConsoleSession</code>. 
            
            <h2>Equinox Built-in Command Provider, Migrated to Gogo-type Commands</h2>
            
            The new console is intended to replace the Equinox built-in console. Currently, in order to use the new console, one has to disable the built-in console by setting the configuration property <code>osgi.console.enable.builtin=false</code>. 
            The <code>CommandProvider</code> with the basic Equinox commands is registered in the built-in console, and when it is disabled, the provider does not get registered. That is why all of its commands (such as ss, bundles, bundle,...) are migrated 
            to Gogo-type commands and are registered by the new console. The commands have the same syntax and output as the original Equinox commands. The main difference between the implementations of the original and migrated commands is that the latter make 
            use of the Gogo features such as converters and formatters, to get their parameters in the right format, and to format their output, respectively. Also, the migrated commands do not have direct access to the internal Equinox classes and use services 
            such as <code>PackageAdmin</code> and <code>PlatformAdmin</code> to get some of the information they need.
            
            <h2>Tab completion</h2>
            
            <p>Tab completion, as the name suggests, provides functionality to complete the current input with possible options. This functionality is provided with the following limitation -  it works only for ssh and telnet connections. 
            On a session which uses standard input, it does not work. The reason is that the OS buffers the standard input until it receives a new line, so the code cannot determine when the tab key is pressed. This problem does not occur with the socket input stream, 
            with which work the telnet and ssh sessions. 
            </p>
            
            <p>The component provides completion for filenames, Gogo session variables' names and commands' names. An interface <code>Completer</code> is defined, with a single method <code>getCandidates()</code>. This method accepts as arguments
            the command line and the current position in it, and returns a map, containing the possible candidates. The keys in the map are the completion candidates and the values are the positions in the command line, from which starts 
            the completion. 
            </p>
            
            <p>There are three implementors of the <code>Completer</code> interface in the new console - for filenames, session variables' names and commands' names. Additionally, the console supports custom completers - a custom bundle may register
            an implementor of the <code>Completer</code> interface as a service, and it will also be called upon request for completion. This could be useful if the custom completer uses some knowledge about the semantics of a command
            and provides more accurate completion than the default completers. 
            </p>
            
            <p>There is a completion handler, which aggregates all available completers. When a request for completion comes, the completion handler looks up any custom completers and calls the default completers and the custom completers. It then returns all completion 
            candidates, returned by all available completers. 
            </p>
            
            <p>However, some heuristics is used when calling the completers. The custom completers, if any are available, are always called. From the default completers, some may not be called. For example,
            if the token for completion starts with the file protocol identifier, then only the filename completer is called. If the token starts with the identifier for a variable reference (the dollar sign), only the session variables' names
            completer is called. 
            </p>  
            
            <p>The file name completer provides completion for both absolute and relative (to the current directory) filenames. If the token for completion ends with the file separator, then the possible completion candidates are all files in the
            folder before the separator. 
            </p>
            
            <p>If after the calls to all completers there is only one candidate, the current token on the command line is completed with it. If there are more than one completion candidates, they are printed in the console and the user can iterate 
            through them by pressing the tab key multiple times. Each time the current completion candidate is placed in the command line and seen in the console. 
            </p>
            
            <p>When multiple completions are available, the implementation finds the longest common prefix of all completion candidates. If this prefix is longer than the token for completion, the token is completed with the remaining characters from
            the prefix before the user starts to iterate through the options. 
            </p>
            
            <h2>Command Line Editing and History</h2>
            
            <p>The OS shell provides command line history and editing by default. So when running the console in the OS shell, on the standard input and output, these features come for granted. The situation when connecting through ssh and telnet is 
            different. There the editing should be done in the code.
            </p> 
            
            <p>So the new console contains a component, which performs this function both for telnet and ssh. The component provides wrappers of the input and output socket steams. These wrappers
            take care of the editing and history. The input stream wrapper reads the socket input character by character and buffers it. Then editing operations (adding/deleting characters, moving with the arrows) are performed on the content in
            the buffer. The changed content is displayed in the output stream. The buffer content is passed to the actual input stream from which the shell reads, when new line comes from the socket.</p>
            </p>
            
            <p>The history is a buffer, which saves each command line when a new line character is read, just before passing it to the shell input stream. With the up and down arrow the user can navigate through 
            the history.
            </p>
            
            <h2>Telnet server</h2>
            
            <p>The new console provides a telnet server. It can be started and stopped through the <code>telnet</code> console command. Moreover, if a default value is provided for the telnet port through a configuration property, the server is started by default. The server listens 
            for connections on the telnet port. When a client connects to the socket, the server creates a <code>TelnetConnection</code> object, which handles the socket input. Here again the input from the socket is wrapped in a wrapper, which handles the telnet 
            protocol specifics. The wrapper forwards the user input (which is not part of the telnet protocol) to the command line editing component, and also echoes it to the socket output stream. 
            </p>
            
            <p>First of all, before starting to handle user input, the wrapper performs terminal type negotiation with the telnet client. The terminal type determines the encoding of the control escape sequences. This enables the shell to handle correctly these escape sequences.
            The console recognizes the following control escape sequences:
            <ul>
                <li>Up arrow</li>
                <li>Down arrow</li>
                <li>Right arrow</li>
                <li>Left arrow</li>
                <li>Home</li>
                <li>End</li>
                <li>Page up</li>
                <li>Page down</li>
                <li>Insert</li>
            </ul>
            In addition, the <code>BACKSPACE</code> and <code>DEL</code> codes are also negotiated. 
            </p>
            
            <p>The console supports the following terminal types (the subsets of them, consisting of the above escape sequences):
            <ul>
                <li>VT100</li>
                <li>VT220</li>
                <li>VT320</li>
                <li>SCO</li>
                <li>ANSI</li>
                <li>XTERM</li>
            </ul>
            <br />
            From each terminal type the above described control escape sequences are supported.
            </p>
                
            <p>If the client does not provide terminal type negotiation, or requests a different terminal type from the supported, the XTERM terminal type is used as default on UNIX/Linux systems and ANSI - on Windows systems. After the terminal type is negotiated, 
            the telnet component creates a Gogo <code>CommandSession</code> and the console can proceed with processing the user input.    
            </p>
            
            <p>In addtion to the telnet port, the telnet server can be configured also with a host address, on which to listen for incoming connections. This allows to restrict the telnet server to listen only on a particular network adress on the local host, instead
            of listening on all available addresses - this is the default behavior when opening a <code>ServerSocket</code> if no host address is specified. The host and port may be specified through the configuration property <code>osgi.console</code>. The format of the value of the property 
            is <code>[&lt;host&gt;:]&lt;port&gt;</code>. If the host and/or port are not specified as a configuration property, they can be provided as arguments to the <code>telnet</code> command, which starts the telnet server.</p>
            
            <h2>Ssh Server</h2>
            
            <p>The new console provides also a ssh server. It can be started and stopped through the <code>ssh</code> console command. Moreover, if a default value is provided for the ssh port through a configuration property, the server is started by default. The server listens 
            for connections on the ssh port. For the internals of the ssh protocol the Apache SSHD library is used. After establishing the SSH connection, the terminal type is determined by an environment variable, provided by the SSHD server. Then a wrapper for the socket input
            is created. It handles the echoing of the user input to the output of the socket and forwards the input to the command line editing component. Finally, a Gogo <code>CommandSession</code> is created and the ssh components starts listening for user input.</p>
            
            <p>The ssh supports the same terminal types as the telnet.</p>
            
            <p>In addtion to the ssh port, the ssh server can be configured also with a host address, on which to listen for incoming connections. This is implemented for the same reasons as with the telnet server. The host and port may be specified through the configuration property 
            <code>osgi.console.ssh</code>. The format of the value of the property is <code>[&lt;host&gt;:]&lt;port&gt;</code>. If the host and/or port are not specified as a configuration property, they can be provided as arguments to the <code>ssh</code> command, which starts the ssh server.</p>
            
            <h2>JAAS Authentication</h2>
            
            <p>The ssh server uses a simple JAAS login module for password-based user authentication. The login module uses the secure store to get the user's password and compares it with the password passed by the user. The module uses <code>RolePrincipal</code> and 
            <code>UserPrincipal</code>. The <code>RolePrincipal</code> represents a single user role. The <code>UserPrincipal</code> represents the user with username, password and a set of <code>RolePrincipal</code>s. Currently the roles do not have a real function 
            in the console - authorization is not implemented yet. They are provided to facilitate the implementation of user authorization in the future. 
            </p>
            
            <p>Instead of the default JAAS login module, a custom login module can be specified.</p>
            
            <p>The SSHD library, used by the ssh server, is configured to use JAAS authentication. In order for the login module to be found upon user authorization, a fragment bundle to the SSHD bundle is created. It does not provide any functionality and its sole purpose
            is to import the login module package (which is part of the console) to the SSHD bundle. This allows the SSHD bundle to load the login module class.
            </p>
            
            <h2>Secure Store</h2>
            
            <p>For the purpose of the password-based user authentication, the default ssh authentication mechanism uses a secure store to store users' passwords and roles. If the default authentication is to be used is specified with the property 
            <code>osgi.console.ssh.useDefaultSecureStorage</code>. This property must be set to true in order to use the default authentication.
            </p>
            
            <p>The default secure store stores the user information in a file on the filesystem. The location of the file must be specified with the property <code>org.eclipse.equinox.console.jaas.file</code>.
            The passwords are encrypted using one-way hashing.
            </p>
            
            <p>The ssh server, when starting, checks if the default authentication and store should be used. If this is the case, it checks if there are users stored in the store. If there are no users, it creates a default user <code>equinox</code> with password <code>equinox</code>. The user is 
            required to create a new user upon first login and the default user is deleted. Also, the ssh server registers a command provider with commands for user management. The commands for the follwing operations are available:
            <ul>
                <li>adding a user</li>
                <li>deleting a user</li>
                <li>setting/changing a password for a user</li>
                <li>resetting a password for a user</li>
                <li>adding roles for a user</li>
                <li>removing user's roles</li>
                <li>listing users</li>
            </ul>     
            </p>
            
            <p>The user management commands use directly the API for managing the secure store. The API provides operations similar to the commands.
            </p>
            
            <p>The commands for adding a user and setting a password have two versions - interactive and batch. <br />
            The interactive version does not have arguments and asks sequentially for username, password and roles, waiting for user input after each of these. It also requests confirmation of the password. The password is not echoed
            to the socket output, so that it is not printed in the user's console. Also, the command history is turned off, so that the password is not saved there. <br />
            The batch version takes all arguments together.
            The password must be at least 8 symbols long.
            The username may contain alphanumerical characters, plus underscore and dot.
            If upon confirmation the two passwords do not match, the user is asked two more times for confirmation.
            </p>
            
            <p>The secure store API in each method reads the store file (which is a properties file) into a <code>Properties</code> object, performs the operation upon them, and stores them back to the file.
            </p>
                        
            <h2>Configuring SSH and Telnet Port and Host through Configuration Admin</h2>
            
            <p>The console supports configuring ssh and telnet port and host through Configuration Admin. When the <code>SshCommand</code> and <code>TelnetCommand</code> objects are created,
            they check the value of the proprety <code>osgi.console.useConfigAdmin</code>. If it is not set, or has value of <code>false</code>, they use the configuration properties to get values for the host and/or port.
            If the property is set to <code>true</code>, they ignore the configuration properties and register a <code>ManagedService</code> to receive configuration from the Configuration Admin. 
            </p> 
            
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