
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">[Global Namespace]</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Wechat" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Wechat.html">Wechat</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat.html">WeChat</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:WeChat_AI" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/AI.html">AI</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_AI_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/AI/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:WeChat_AI_ServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/AI/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_AccessToken" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/AccessToken.html">AccessToken</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_AccessToken_AccessToken" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/AccessToken/AccessToken.html">AccessToken</a>                    </div>                </li>                            <li data-name="class:WeChat_AccessToken_ServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/AccessToken/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Analysis" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Analysis.html">Analysis</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Analysis_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Analysis/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:WeChat_Analysis_ServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Analysis/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Base" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Base.html">Base</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Base_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Base/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:WeChat_Base_ServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Base/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Comment" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Comment.html">Comment</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Comment_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Comment/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:WeChat_Comment_ServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Comment/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Console" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Console.html">Console</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Console_AccessTokenCommand" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Console/AccessTokenCommand.html">AccessTokenCommand</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_CustomService" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/CustomService.html">CustomService</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_CustomService_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/CustomService/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:WeChat_CustomService_ServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/CustomService/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Exceptions" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Exceptions.html">Exceptions</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Exceptions_WechatException" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Exceptions/WechatException.html">WechatException</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Kernel" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Kernel.html">Kernel</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:WeChat_Kernel_Messages" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Kernel/Messages.html">Messages</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:WeChat_Kernel_Messages_Handler" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Kernel/Messages/Handler.html">Handler</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Kernel_Messages_Handler_ClickEventHandler" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Handler/ClickEventHandler.html">ClickEventHandler</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Handler_Handler" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Handler/Handler.html">Handler</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Handler_HandlerInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Handler/HandlerInterface.html">HandlerInterface</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Handler_ImageHandler" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Handler/ImageHandler.html">ImageHandler</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Handler_LinkHandler" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Handler/LinkHandler.html">LinkHandler</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Handler_LocationEventHandler" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Handler/LocationEventHandler.html">LocationEventHandler</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Handler_LocationHandler" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Handler/LocationHandler.html">LocationHandler</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Handler_ShortVideoHandler" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Handler/ShortVideoHandler.html">ShortVideoHandler</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Handler_SubscribeEventHandler" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Handler/SubscribeEventHandler.html">SubscribeEventHandler</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Handler_TextHandler" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Handler/TextHandler.html">TextHandler</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Handler_VideoHandler" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Handler/VideoHandler.html">VideoHandler</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Handler_ViewEventHandler" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Handler/ViewEventHandler.html">ViewEventHandler</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Handler_VoiceHandler" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Handler/VoiceHandler.html">VoiceHandler</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Image" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Image.html">Image</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Message" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Message.html">Message</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_MessageInterface" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/MessageInterface.html">MessageInterface</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Music" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Music.html">Music</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_News" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/News.html">News</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_PicUrl" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/PicUrl.html">PicUrl</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Text" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Text.html">Text</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Video" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Video.html">Video</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Messages_Voice" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="WeChat/Kernel/Messages/Voice.html">Voice</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Kernel_Support" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Kernel/Support.html">Support</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Kernel_Support_Encrypt" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="WeChat/Kernel/Support/Encrypt.html">Encrypt</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Support_Request" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="WeChat/Kernel/Support/Request.html">Request</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Support_Response" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="WeChat/Kernel/Support/Response.html">Response</a>                    </div>                </li>                            <li data-name="class:WeChat_Kernel_Support_XML" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="WeChat/Kernel/Support/XML.html">XML</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Material" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Material.html">Material</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Material_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Material/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:WeChat_Material_ServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Material/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Menu" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Menu.html">Menu</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Menu_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Menu/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:WeChat_Menu_ServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Menu/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Message" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Message.html">Message</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Message_AutoReplyRule" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Message/AutoReplyRule.html">AutoReplyRule</a>                    </div>                </li>                            <li data-name="class:WeChat_Message_ServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Message/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                            <li data-name="class:WeChat_Message_Subscribe" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Message/Subscribe.html">Subscribe</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_OAuth" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/OAuth.html">OAuth</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_OAuth_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/OAuth/Client.html">Client</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_QRC" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/QRC.html">QRC</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_QRC_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/QRC/Client.html">Client</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Server" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Server.html">Server</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Server_Server" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Server/Server.html">Server</a>                    </div>                </li>                            <li data-name="class:WeChat_Server_ServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Server/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Temp" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Temp.html">Temp</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Temp_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Temp/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:WeChat_Temp_ServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Temp/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Template" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Template.html">Template</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Template_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Template/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:WeChat_Template_ServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Template/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Url" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Url.html">Url</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Url_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Url/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:WeChat_Url_ServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Url/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:WeChat_Users" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="WeChat/Users.html">Users</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:WeChat_Users_Black" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Users/Black.html">Black</a>                    </div>                </li>                            <li data-name="class:WeChat_Users_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Users/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:WeChat_Users_Tag" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="WeChat/Users/Tag.html">Tag</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:WeChat_Facade" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="WeChat/Facade.html">Facade</a>                    </div>                </li>                            <li data-name="class:WeChat_ServiceProvider" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="WeChat/ServiceProvider.html">ServiceProvider</a>                    </div>                </li>                            <li data-name="class:WeChat_WeChat" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="WeChat/WeChat.html">WeChat</a>                    </div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": ".html", "name": "", "doc": "Namespace "},{"type": "Namespace", "link": "WeChat.html", "name": "WeChat", "doc": "Namespace WeChat"},{"type": "Namespace", "link": "WeChat/AI.html", "name": "WeChat\\AI", "doc": "Namespace WeChat\\AI"},{"type": "Namespace", "link": "WeChat/AccessToken.html", "name": "WeChat\\AccessToken", "doc": "Namespace WeChat\\AccessToken"},{"type": "Namespace", "link": "WeChat/Analysis.html", "name": "WeChat\\Analysis", "doc": "Namespace WeChat\\Analysis"},{"type": "Namespace", "link": "WeChat/Base.html", "name": "WeChat\\Base", "doc": "Namespace WeChat\\Base"},{"type": "Namespace", "link": "WeChat/Comment.html", "name": "WeChat\\Comment", "doc": "Namespace WeChat\\Comment"},{"type": "Namespace", "link": "WeChat/Console.html", "name": "WeChat\\Console", "doc": "Namespace WeChat\\Console"},{"type": "Namespace", "link": "WeChat/CustomService.html", "name": "WeChat\\CustomService", "doc": "Namespace WeChat\\CustomService"},{"type": "Namespace", "link": "WeChat/Exceptions.html", "name": "WeChat\\Exceptions", "doc": "Namespace WeChat\\Exceptions"},{"type": "Namespace", "link": "WeChat/Kernel.html", "name": "WeChat\\Kernel", "doc": "Namespace WeChat\\Kernel"},{"type": "Namespace", "link": "WeChat/Kernel/Messages.html", "name": "WeChat\\Kernel\\Messages", "doc": "Namespace WeChat\\Kernel\\Messages"},{"type": "Namespace", "link": "WeChat/Kernel/Messages/Handler.html", "name": "WeChat\\Kernel\\Messages\\Handler", "doc": "Namespace WeChat\\Kernel\\Messages\\Handler"},{"type": "Namespace", "link": "WeChat/Kernel/Support.html", "name": "WeChat\\Kernel\\Support", "doc": "Namespace WeChat\\Kernel\\Support"},{"type": "Namespace", "link": "WeChat/Material.html", "name": "WeChat\\Material", "doc": "Namespace WeChat\\Material"},{"type": "Namespace", "link": "WeChat/Menu.html", "name": "WeChat\\Menu", "doc": "Namespace WeChat\\Menu"},{"type": "Namespace", "link": "WeChat/Message.html", "name": "WeChat\\Message", "doc": "Namespace WeChat\\Message"},{"type": "Namespace", "link": "WeChat/OAuth.html", "name": "WeChat\\OAuth", "doc": "Namespace WeChat\\OAuth"},{"type": "Namespace", "link": "WeChat/QRC.html", "name": "WeChat\\QRC", "doc": "Namespace WeChat\\QRC"},{"type": "Namespace", "link": "WeChat/Server.html", "name": "WeChat\\Server", "doc": "Namespace WeChat\\Server"},{"type": "Namespace", "link": "WeChat/Temp.html", "name": "WeChat\\Temp", "doc": "Namespace WeChat\\Temp"},{"type": "Namespace", "link": "WeChat/Template.html", "name": "WeChat\\Template", "doc": "Namespace WeChat\\Template"},{"type": "Namespace", "link": "WeChat/Url.html", "name": "WeChat\\Url", "doc": "Namespace WeChat\\Url"},{"type": "Namespace", "link": "WeChat/Users.html", "name": "WeChat\\Users", "doc": "Namespace WeChat\\Users"},
            {"type": "Interface", "fromName": "WeChat\\Kernel\\Messages\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler.html", "link": "WeChat/Kernel/Messages/Handler/HandlerInterface.html", "name": "WeChat\\Kernel\\Messages\\Handler\\HandlerInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Handler\\HandlerInterface", "fromLink": "WeChat/Kernel/Messages/Handler/HandlerInterface.html", "link": "WeChat/Kernel/Messages/Handler/HandlerInterface.html#method_handle", "name": "WeChat\\Kernel\\Messages\\Handler\\HandlerInterface::handle", "doc": "&quot;&quot;"},
            
            {"type": "Interface", "fromName": "WeChat\\Kernel\\Messages", "fromLink": "WeChat/Kernel/Messages.html", "link": "WeChat/Kernel/Messages/MessageInterface.html", "name": "WeChat\\Kernel\\Messages\\MessageInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\MessageInterface", "fromLink": "WeChat/Kernel/Messages/MessageInterface.html", "link": "WeChat/Kernel/Messages/MessageInterface.html#method_build", "name": "WeChat\\Kernel\\Messages\\MessageInterface::build", "doc": "&quot;&quot;"},
            
            
            {"type": "Class", "fromName": "WeChat\\AI", "fromLink": "WeChat/AI.html", "link": "WeChat/AI/Client.html", "name": "WeChat\\AI\\Client", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\AI\\Client", "fromLink": "WeChat/AI/Client.html", "link": "WeChat/AI/Client.html#method___construct", "name": "WeChat\\AI\\Client::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\AI\\Client", "fromLink": "WeChat/AI/Client.html", "link": "WeChat/AI/Client.html#method_chat", "name": "WeChat\\AI\\Client::chat", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\AI\\Client", "fromLink": "WeChat/AI/Client.html", "link": "WeChat/AI/Client.html#method_voice", "name": "WeChat\\AI\\Client::voice", "doc": "&quot;\u8bed\u97f3\u8bc6\u522b.&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\AI", "fromLink": "WeChat/AI.html", "link": "WeChat/AI/ServiceProvider.html", "name": "WeChat\\AI\\ServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\AI\\ServiceProvider", "fromLink": "WeChat/AI/ServiceProvider.html", "link": "WeChat/AI/ServiceProvider.html#method_register", "name": "WeChat\\AI\\ServiceProvider::register", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\AccessToken", "fromLink": "WeChat/AccessToken.html", "link": "WeChat/AccessToken/AccessToken.html", "name": "WeChat\\AccessToken\\AccessToken", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\AccessToken\\AccessToken", "fromLink": "WeChat/AccessToken/AccessToken.html", "link": "WeChat/AccessToken/AccessToken.html#method___construct", "name": "WeChat\\AccessToken\\AccessToken::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\AccessToken\\AccessToken", "fromLink": "WeChat/AccessToken/AccessToken.html", "link": "WeChat/AccessToken/AccessToken.html#method_get", "name": "WeChat\\AccessToken\\AccessToken::get", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\AccessToken\\AccessToken", "fromLink": "WeChat/AccessToken/AccessToken.html", "link": "WeChat/AccessToken/AccessToken.html#method_server", "name": "WeChat\\AccessToken\\AccessToken::server", "doc": "&quot;\u83b7\u53d6 access_token.&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\AccessToken", "fromLink": "WeChat/AccessToken.html", "link": "WeChat/AccessToken/ServiceProvider.html", "name": "WeChat\\AccessToken\\ServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\AccessToken\\ServiceProvider", "fromLink": "WeChat/AccessToken/ServiceProvider.html", "link": "WeChat/AccessToken/ServiceProvider.html#method_register", "name": "WeChat\\AccessToken\\ServiceProvider::register", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Analysis", "fromLink": "WeChat/Analysis.html", "link": "WeChat/Analysis/Client.html", "name": "WeChat\\Analysis\\Client", "doc": "&quot;\u6570\u636e\u7edf\u8ba1&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Analysis\\Client", "fromLink": "WeChat/Analysis/Client.html", "link": "WeChat/Analysis/Client.html#method___construct", "name": "WeChat\\Analysis\\Client::__construct", "doc": "&quot;Client constructor.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Analysis\\Client", "fromLink": "WeChat/Analysis/Client.html", "link": "WeChat/Analysis/Client.html#method_analysis", "name": "WeChat\\Analysis\\Client::analysis", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Analysis\\Client", "fromLink": "WeChat/Analysis/Client.html", "link": "WeChat/Analysis/Client.html#method_userSummary", "name": "WeChat\\Analysis\\Client::userSummary", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Analysis\\Client", "fromLink": "WeChat/Analysis/Client.html", "link": "WeChat/Analysis/Client.html#method_userCumulate", "name": "WeChat\\Analysis\\Client::userCumulate", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Analysis", "fromLink": "WeChat/Analysis.html", "link": "WeChat/Analysis/ServiceProvider.html", "name": "WeChat\\Analysis\\ServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Analysis\\ServiceProvider", "fromLink": "WeChat/Analysis/ServiceProvider.html", "link": "WeChat/Analysis/ServiceProvider.html#method_register", "name": "WeChat\\Analysis\\ServiceProvider::register", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Base", "fromLink": "WeChat/Base.html", "link": "WeChat/Base/Client.html", "name": "WeChat\\Base\\Client", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Base\\Client", "fromLink": "WeChat/Base/Client.html", "link": "WeChat/Base/Client.html#method___construct", "name": "WeChat\\Base\\Client::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Base\\Client", "fromLink": "WeChat/Base/Client.html", "link": "WeChat/Base/Client.html#method_getValidIps", "name": "WeChat\\Base\\Client::getValidIps", "doc": "&quot;\u83b7\u53d6\u5fae\u4fe1\u670d\u52a1\u5668IP\u5730\u5740&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Base", "fromLink": "WeChat/Base.html", "link": "WeChat/Base/ServiceProvider.html", "name": "WeChat\\Base\\ServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Base\\ServiceProvider", "fromLink": "WeChat/Base/ServiceProvider.html", "link": "WeChat/Base/ServiceProvider.html#method_register", "name": "WeChat\\Base\\ServiceProvider::register", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Comment", "fromLink": "WeChat/Comment.html", "link": "WeChat/Comment/Client.html", "name": "WeChat\\Comment\\Client", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Comment\\Client", "fromLink": "WeChat/Comment/Client.html", "link": "WeChat/Comment/Client.html#method___construct", "name": "WeChat\\Comment\\Client::__construct", "doc": "&quot;Comment constructor.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Comment\\Client", "fromLink": "WeChat/Comment/Client.html", "link": "WeChat/Comment/Client.html#method_add", "name": "WeChat\\Comment\\Client::add", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Comment\\Client", "fromLink": "WeChat/Comment/Client.html", "link": "WeChat/Comment/Client.html#method_download", "name": "WeChat\\Comment\\Client::download", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Comment\\Client", "fromLink": "WeChat/Comment/Client.html", "link": "WeChat/Comment/Client.html#method_modify", "name": "WeChat\\Comment\\Client::modify", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Comment\\Client", "fromLink": "WeChat/Comment/Client.html", "link": "WeChat/Comment/Client.html#method_getList", "name": "WeChat\\Comment\\Client::getList", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Comment\\Client", "fromLink": "WeChat/Comment/Client.html", "link": "WeChat/Comment/Client.html#method_openComment", "name": "WeChat\\Comment\\Client::openComment", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Comment\\Client", "fromLink": "WeChat/Comment/Client.html", "link": "WeChat/Comment/Client.html#method_closeComment", "name": "WeChat\\Comment\\Client::closeComment", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Comment\\Client", "fromLink": "WeChat/Comment/Client.html", "link": "WeChat/Comment/Client.html#method_getComment", "name": "WeChat\\Comment\\Client::getComment", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Comment\\Client", "fromLink": "WeChat/Comment/Client.html", "link": "WeChat/Comment/Client.html#method_markComment", "name": "WeChat\\Comment\\Client::markComment", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Comment\\Client", "fromLink": "WeChat/Comment/Client.html", "link": "WeChat/Comment/Client.html#method_unmarkComment", "name": "WeChat\\Comment\\Client::unmarkComment", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Comment\\Client", "fromLink": "WeChat/Comment/Client.html", "link": "WeChat/Comment/Client.html#method_deleteComment", "name": "WeChat\\Comment\\Client::deleteComment", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Comment\\Client", "fromLink": "WeChat/Comment/Client.html", "link": "WeChat/Comment/Client.html#method_reployComent", "name": "WeChat\\Comment\\Client::reployComent", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Comment\\Client", "fromLink": "WeChat/Comment/Client.html", "link": "WeChat/Comment/Client.html#method_deleteReployComment", "name": "WeChat\\Comment\\Client::deleteReployComment", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Comment", "fromLink": "WeChat/Comment.html", "link": "WeChat/Comment/ServiceProvider.html", "name": "WeChat\\Comment\\ServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Comment\\ServiceProvider", "fromLink": "WeChat/Comment/ServiceProvider.html", "link": "WeChat/Comment/ServiceProvider.html#method_register", "name": "WeChat\\Comment\\ServiceProvider::register", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Console", "fromLink": "WeChat/Console.html", "link": "WeChat/Console/AccessTokenCommand.html", "name": "WeChat\\Console\\AccessTokenCommand", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "WeChat\\CustomService", "fromLink": "WeChat/CustomService.html", "link": "WeChat/CustomService/Client.html", "name": "WeChat\\CustomService\\Client", "doc": "&quot;Class CustomService.&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\CustomService\\Client", "fromLink": "WeChat/CustomService/Client.html", "link": "WeChat/CustomService/Client.html#method___construct", "name": "WeChat\\CustomService\\Client::__construct", "doc": "&quot;CustomService constructor.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\CustomService\\Client", "fromLink": "WeChat/CustomService/Client.html", "link": "WeChat/CustomService/Client.html#method_getList", "name": "WeChat\\CustomService\\Client::getList", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\CustomService\\Client", "fromLink": "WeChat/CustomService/Client.html", "link": "WeChat/CustomService/Client.html#method_getOnlineList", "name": "WeChat\\CustomService\\Client::getOnlineList", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\CustomService\\Client", "fromLink": "WeChat/CustomService/Client.html", "link": "WeChat/CustomService/Client.html#method_add", "name": "WeChat\\CustomService\\Client::add", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\CustomService\\Client", "fromLink": "WeChat/CustomService/Client.html", "link": "WeChat/CustomService/Client.html#method_invite", "name": "WeChat\\CustomService\\Client::invite", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\CustomService\\Client", "fromLink": "WeChat/CustomService/Client.html", "link": "WeChat/CustomService/Client.html#method_updateInfo", "name": "WeChat\\CustomService\\Client::updateInfo", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\CustomService\\Client", "fromLink": "WeChat/CustomService/Client.html", "link": "WeChat/CustomService/Client.html#method_uploadHead", "name": "WeChat\\CustomService\\Client::uploadHead", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\CustomService\\Client", "fromLink": "WeChat/CustomService/Client.html", "link": "WeChat/CustomService/Client.html#method_delete", "name": "WeChat\\CustomService\\Client::delete", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\CustomService", "fromLink": "WeChat/CustomService.html", "link": "WeChat/CustomService/ServiceProvider.html", "name": "WeChat\\CustomService\\ServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\CustomService\\ServiceProvider", "fromLink": "WeChat/CustomService/ServiceProvider.html", "link": "WeChat/CustomService/ServiceProvider.html#method_register", "name": "WeChat\\CustomService\\ServiceProvider::register", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Exceptions", "fromLink": "WeChat/Exceptions.html", "link": "WeChat/Exceptions/WechatException.html", "name": "WeChat\\Exceptions\\WechatException", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Exceptions\\WechatException", "fromLink": "WeChat/Exceptions/WechatException.html", "link": "WeChat/Exceptions/WechatException.html#method___construct", "name": "WeChat\\Exceptions\\WechatException::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Exceptions\\WechatException", "fromLink": "WeChat/Exceptions/WechatException.html", "link": "WeChat/Exceptions/WechatException.html#method_getJson", "name": "WeChat\\Exceptions\\WechatException::getJson", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat", "fromLink": "WeChat.html", "link": "WeChat/Facade.html", "name": "WeChat\\Facade", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Facade", "fromLink": "WeChat/Facade.html", "link": "WeChat/Facade.html#method_getFacadeAccessor", "name": "WeChat\\Facade::getFacadeAccessor", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler.html", "link": "WeChat/Kernel/Messages/Handler/ClickEventHandler.html", "name": "WeChat\\Kernel\\Messages\\Handler\\ClickEventHandler", "doc": "&quot;\u81ea\u5b9a\u4e49\u83dc\u5355\u4e8b\u4ef6.&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Handler\\ClickEventHandler", "fromLink": "WeChat/Kernel/Messages/Handler/ClickEventHandler.html", "link": "WeChat/Kernel/Messages/Handler/ClickEventHandler.html#method___construct", "name": "WeChat\\Kernel\\Messages\\Handler\\ClickEventHandler::__construct", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler.html", "link": "WeChat/Kernel/Messages/Handler/Handler.html", "name": "WeChat\\Kernel\\Messages\\Handler\\Handler", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Handler\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler/Handler.html", "link": "WeChat/Kernel/Messages/Handler/Handler.html#method___construct", "name": "WeChat\\Kernel\\Messages\\Handler\\Handler::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Handler\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler/Handler.html", "link": "WeChat/Kernel/Messages/Handler/Handler.html#method_handle", "name": "WeChat\\Kernel\\Messages\\Handler\\Handler::handle", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler.html", "link": "WeChat/Kernel/Messages/Handler/HandlerInterface.html", "name": "WeChat\\Kernel\\Messages\\Handler\\HandlerInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Handler\\HandlerInterface", "fromLink": "WeChat/Kernel/Messages/Handler/HandlerInterface.html", "link": "WeChat/Kernel/Messages/Handler/HandlerInterface.html#method_handle", "name": "WeChat\\Kernel\\Messages\\Handler\\HandlerInterface::handle", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler.html", "link": "WeChat/Kernel/Messages/Handler/ImageHandler.html", "name": "WeChat\\Kernel\\Messages\\Handler\\ImageHandler", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Handler\\ImageHandler", "fromLink": "WeChat/Kernel/Messages/Handler/ImageHandler.html", "link": "WeChat/Kernel/Messages/Handler/ImageHandler.html#method___construct", "name": "WeChat\\Kernel\\Messages\\Handler\\ImageHandler::__construct", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler.html", "link": "WeChat/Kernel/Messages/Handler/LinkHandler.html", "name": "WeChat\\Kernel\\Messages\\Handler\\LinkHandler", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Handler\\LinkHandler", "fromLink": "WeChat/Kernel/Messages/Handler/LinkHandler.html", "link": "WeChat/Kernel/Messages/Handler/LinkHandler.html#method___construct", "name": "WeChat\\Kernel\\Messages\\Handler\\LinkHandler::__construct", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler.html", "link": "WeChat/Kernel/Messages/Handler/LocationEventHandler.html", "name": "WeChat\\Kernel\\Messages\\Handler\\LocationEventHandler", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Handler\\LocationEventHandler", "fromLink": "WeChat/Kernel/Messages/Handler/LocationEventHandler.html", "link": "WeChat/Kernel/Messages/Handler/LocationEventHandler.html#method___construct", "name": "WeChat\\Kernel\\Messages\\Handler\\LocationEventHandler::__construct", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler.html", "link": "WeChat/Kernel/Messages/Handler/LocationHandler.html", "name": "WeChat\\Kernel\\Messages\\Handler\\LocationHandler", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Handler\\LocationHandler", "fromLink": "WeChat/Kernel/Messages/Handler/LocationHandler.html", "link": "WeChat/Kernel/Messages/Handler/LocationHandler.html#method___construct", "name": "WeChat\\Kernel\\Messages\\Handler\\LocationHandler::__construct", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler.html", "link": "WeChat/Kernel/Messages/Handler/ShortVideoHandler.html", "name": "WeChat\\Kernel\\Messages\\Handler\\ShortVideoHandler", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Handler\\ShortVideoHandler", "fromLink": "WeChat/Kernel/Messages/Handler/ShortVideoHandler.html", "link": "WeChat/Kernel/Messages/Handler/ShortVideoHandler.html#method___construct", "name": "WeChat\\Kernel\\Messages\\Handler\\ShortVideoHandler::__construct", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler.html", "link": "WeChat/Kernel/Messages/Handler/SubscribeEventHandler.html", "name": "WeChat\\Kernel\\Messages\\Handler\\SubscribeEventHandler", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Handler\\SubscribeEventHandler", "fromLink": "WeChat/Kernel/Messages/Handler/SubscribeEventHandler.html", "link": "WeChat/Kernel/Messages/Handler/SubscribeEventHandler.html#method___construct", "name": "WeChat\\Kernel\\Messages\\Handler\\SubscribeEventHandler::__construct", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler.html", "link": "WeChat/Kernel/Messages/Handler/TextHandler.html", "name": "WeChat\\Kernel\\Messages\\Handler\\TextHandler", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Handler\\TextHandler", "fromLink": "WeChat/Kernel/Messages/Handler/TextHandler.html", "link": "WeChat/Kernel/Messages/Handler/TextHandler.html#method___construct", "name": "WeChat\\Kernel\\Messages\\Handler\\TextHandler::__construct", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler.html", "link": "WeChat/Kernel/Messages/Handler/VideoHandler.html", "name": "WeChat\\Kernel\\Messages\\Handler\\VideoHandler", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Handler\\VideoHandler", "fromLink": "WeChat/Kernel/Messages/Handler/VideoHandler.html", "link": "WeChat/Kernel/Messages/Handler/VideoHandler.html#method___construct", "name": "WeChat\\Kernel\\Messages\\Handler\\VideoHandler::__construct", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler.html", "link": "WeChat/Kernel/Messages/Handler/ViewEventHandler.html", "name": "WeChat\\Kernel\\Messages\\Handler\\ViewEventHandler", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages\\Handler", "fromLink": "WeChat/Kernel/Messages/Handler.html", "link": "WeChat/Kernel/Messages/Handler/VoiceHandler.html", "name": "WeChat\\Kernel\\Messages\\Handler\\VoiceHandler", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Handler\\VoiceHandler", "fromLink": "WeChat/Kernel/Messages/Handler/VoiceHandler.html", "link": "WeChat/Kernel/Messages/Handler/VoiceHandler.html#method___construct", "name": "WeChat\\Kernel\\Messages\\Handler\\VoiceHandler::__construct", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages", "fromLink": "WeChat/Kernel/Messages.html", "link": "WeChat/Kernel/Messages/Image.html", "name": "WeChat\\Kernel\\Messages\\Image", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Image", "fromLink": "WeChat/Kernel/Messages/Image.html", "link": "WeChat/Kernel/Messages/Image.html#method_build", "name": "WeChat\\Kernel\\Messages\\Image::build", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages", "fromLink": "WeChat/Kernel/Messages.html", "link": "WeChat/Kernel/Messages/Message.html", "name": "WeChat\\Kernel\\Messages\\Message", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Message", "fromLink": "WeChat/Kernel/Messages/Message.html", "link": "WeChat/Kernel/Messages/Message.html#method_build", "name": "WeChat\\Kernel\\Messages\\Message::build", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages", "fromLink": "WeChat/Kernel/Messages.html", "link": "WeChat/Kernel/Messages/MessageInterface.html", "name": "WeChat\\Kernel\\Messages\\MessageInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\MessageInterface", "fromLink": "WeChat/Kernel/Messages/MessageInterface.html", "link": "WeChat/Kernel/Messages/MessageInterface.html#method_build", "name": "WeChat\\Kernel\\Messages\\MessageInterface::build", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages", "fromLink": "WeChat/Kernel/Messages.html", "link": "WeChat/Kernel/Messages/Music.html", "name": "WeChat\\Kernel\\Messages\\Music", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Music", "fromLink": "WeChat/Kernel/Messages/Music.html", "link": "WeChat/Kernel/Messages/Music.html#method_build", "name": "WeChat\\Kernel\\Messages\\Music::build", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages", "fromLink": "WeChat/Kernel/Messages.html", "link": "WeChat/Kernel/Messages/News.html", "name": "WeChat\\Kernel\\Messages\\News", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\News", "fromLink": "WeChat/Kernel/Messages/News.html", "link": "WeChat/Kernel/Messages/News.html#method_createNews", "name": "WeChat\\Kernel\\Messages\\News::createNews", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\News", "fromLink": "WeChat/Kernel/Messages/News.html", "link": "WeChat/Kernel/Messages/News.html#method_build", "name": "WeChat\\Kernel\\Messages\\News::build", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages", "fromLink": "WeChat/Kernel/Messages.html", "link": "WeChat/Kernel/Messages/PicUrl.html", "name": "WeChat\\Kernel\\Messages\\PicUrl", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\PicUrl", "fromLink": "WeChat/Kernel/Messages/PicUrl.html", "link": "WeChat/Kernel/Messages/PicUrl.html#method_build", "name": "WeChat\\Kernel\\Messages\\PicUrl::build", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages", "fromLink": "WeChat/Kernel/Messages.html", "link": "WeChat/Kernel/Messages/Text.html", "name": "WeChat\\Kernel\\Messages\\Text", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Text", "fromLink": "WeChat/Kernel/Messages/Text.html", "link": "WeChat/Kernel/Messages/Text.html#method_build", "name": "WeChat\\Kernel\\Messages\\Text::build", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages", "fromLink": "WeChat/Kernel/Messages.html", "link": "WeChat/Kernel/Messages/Video.html", "name": "WeChat\\Kernel\\Messages\\Video", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Video", "fromLink": "WeChat/Kernel/Messages/Video.html", "link": "WeChat/Kernel/Messages/Video.html#method_build", "name": "WeChat\\Kernel\\Messages\\Video::build", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Messages", "fromLink": "WeChat/Kernel/Messages.html", "link": "WeChat/Kernel/Messages/Voice.html", "name": "WeChat\\Kernel\\Messages\\Voice", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Messages\\Voice", "fromLink": "WeChat/Kernel/Messages/Voice.html", "link": "WeChat/Kernel/Messages/Voice.html#method_build", "name": "WeChat\\Kernel\\Messages\\Voice::build", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Support", "fromLink": "WeChat/Kernel/Support.html", "link": "WeChat/Kernel/Support/Encrypt.html", "name": "WeChat\\Kernel\\Support\\Encrypt", "doc": "&quot;\u751f\u6210\u52a0\u5bc6 url \u4ee5\u4f9b\u540e\u7eed\u6d4b\u8bd5.&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Support\\Encrypt", "fromLink": "WeChat/Kernel/Support/Encrypt.html", "link": "WeChat/Kernel/Support/Encrypt.html#method_get", "name": "WeChat\\Kernel\\Support\\Encrypt::get", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Support", "fromLink": "WeChat/Kernel/Support.html", "link": "WeChat/Kernel/Support/Request.html", "name": "WeChat\\Kernel\\Support\\Request", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "WeChat\\Kernel\\Support", "fromLink": "WeChat/Kernel/Support.html", "link": "WeChat/Kernel/Support/Response.html", "name": "WeChat\\Kernel\\Support\\Response", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Support\\Response", "fromLink": "WeChat/Kernel/Support/Response.html", "link": "WeChat/Kernel/Support/Response.html#method_json", "name": "WeChat\\Kernel\\Support\\Response::json", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Kernel\\Support\\Response", "fromLink": "WeChat/Kernel/Support/Response.html", "link": "WeChat/Kernel/Support/Response.html#method_redirect", "name": "WeChat\\Kernel\\Support\\Response::redirect", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Kernel\\Support", "fromLink": "WeChat/Kernel/Support.html", "link": "WeChat/Kernel/Support/XML.html", "name": "WeChat\\Kernel\\Support\\XML", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Kernel\\Support\\XML", "fromLink": "WeChat/Kernel/Support/XML.html", "link": "WeChat/Kernel/Support/XML.html#method_handle", "name": "WeChat\\Kernel\\Support\\XML::handle", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Material", "fromLink": "WeChat/Material.html", "link": "WeChat/Material/Client.html", "name": "WeChat\\Material\\Client", "doc": "&quot;Class Material.&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Material\\Client", "fromLink": "WeChat/Material/Client.html", "link": "WeChat/Material/Client.html#method___construct", "name": "WeChat\\Material\\Client::__construct", "doc": "&quot;Material constructor.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Material\\Client", "fromLink": "WeChat/Material/Client.html", "link": "WeChat/Material/Client.html#method_addNews", "name": "WeChat\\Material\\Client::addNews", "doc": "&quot;\u65b0\u589e\u6c38\u4e45\u56fe\u6587\u7d20\u6750.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Material\\Client", "fromLink": "WeChat/Material/Client.html", "link": "WeChat/Material/Client.html#method_addImage", "name": "WeChat\\Material\\Client::addImage", "doc": "&quot;\u4e0a\u4f20\u56fe\u6587\u6d88\u606f\u5185\u7684\u56fe\u7247\u83b7\u53d6URL.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Material\\Client", "fromLink": "WeChat/Material/Client.html", "link": "WeChat/Material/Client.html#method_add", "name": "WeChat\\Material\\Client::add", "doc": "&quot;\u65b0\u589e\u5176\u4ed6\u7c7b\u578b\u6c38\u4e45\u7d20\u6750.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Material\\Client", "fromLink": "WeChat/Material/Client.html", "link": "WeChat/Material/Client.html#method_download", "name": "WeChat\\Material\\Client::download", "doc": "&quot;\u83b7\u53d6\u6c38\u4e45\u7d20\u6750.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Material\\Client", "fromLink": "WeChat/Material/Client.html", "link": "WeChat/Material/Client.html#method_delete", "name": "WeChat\\Material\\Client::delete", "doc": "&quot;\u5220\u9664\u6c38\u4e45\u7d20\u6750.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Material\\Client", "fromLink": "WeChat/Material/Client.html", "link": "WeChat/Material/Client.html#method_modify", "name": "WeChat\\Material\\Client::modify", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Material\\Client", "fromLink": "WeChat/Material/Client.html", "link": "WeChat/Material/Client.html#method_count", "name": "WeChat\\Material\\Client::count", "doc": "&quot;\u83b7\u53d6\u7d20\u6750\u603b\u6570&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Material\\Client", "fromLink": "WeChat/Material/Client.html", "link": "WeChat/Material/Client.html#method_list", "name": "WeChat\\Material\\Client::list", "doc": "&quot;\u83b7\u53d6\u7d20\u6750\u5217\u8868.&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Material", "fromLink": "WeChat/Material.html", "link": "WeChat/Material/ServiceProvider.html", "name": "WeChat\\Material\\ServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Material\\ServiceProvider", "fromLink": "WeChat/Material/ServiceProvider.html", "link": "WeChat/Material/ServiceProvider.html#method_register", "name": "WeChat\\Material\\ServiceProvider::register", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Menu", "fromLink": "WeChat/Menu.html", "link": "WeChat/Menu/Client.html", "name": "WeChat\\Menu\\Client", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Menu\\Client", "fromLink": "WeChat/Menu/Client.html", "link": "WeChat/Menu/Client.html#method___construct", "name": "WeChat\\Menu\\Client::__construct", "doc": "&quot;Menu constructor.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Menu\\Client", "fromLink": "WeChat/Menu/Client.html", "link": "WeChat/Menu/Client.html#method_create", "name": "WeChat\\Menu\\Client::create", "doc": "&quot;\u521b\u5efa\u83dc\u5355.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Menu\\Client", "fromLink": "WeChat/Menu/Client.html", "link": "WeChat/Menu/Client.html#method_get", "name": "WeChat\\Menu\\Client::get", "doc": "&quot;\u67e5\u8be2\u81ea\u5b9a\u4e49\u83dc\u5355.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Menu\\Client", "fromLink": "WeChat/Menu/Client.html", "link": "WeChat/Menu/Client.html#method_delete", "name": "WeChat\\Menu\\Client::delete", "doc": "&quot;\u5220\u9664\u83dc\u5355.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Menu\\Client", "fromLink": "WeChat/Menu/Client.html", "link": "WeChat/Menu/Client.html#method_createConditional", "name": "WeChat\\Menu\\Client::createConditional", "doc": "&quot;\u521b\u5efa\u4e2a\u6027\u5316\u83dc\u5355.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Menu\\Client", "fromLink": "WeChat/Menu/Client.html", "link": "WeChat/Menu/Client.html#method_deleteConditional", "name": "WeChat\\Menu\\Client::deleteConditional", "doc": "&quot;\u5220\u9664\u4e2a\u6027\u5316\u83dc\u5355.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Menu\\Client", "fromLink": "WeChat/Menu/Client.html", "link": "WeChat/Menu/Client.html#method_tryMatch", "name": "WeChat\\Menu\\Client::tryMatch", "doc": "&quot;\u6d4b\u8bd5\u4e2a\u6027\u5316\u83dc\u5355\u5339\u914d\u7ed3\u679c.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Menu\\Client", "fromLink": "WeChat/Menu/Client.html", "link": "WeChat/Menu/Client.html#method_getAll", "name": "WeChat\\Menu\\Client::getAll", "doc": "&quot;\u83b7\u53d6\u81ea\u5b9a\u4e49\u83dc\u5355\u914d\u7f6e.&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Menu", "fromLink": "WeChat/Menu.html", "link": "WeChat/Menu/ServiceProvider.html", "name": "WeChat\\Menu\\ServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Menu\\ServiceProvider", "fromLink": "WeChat/Menu/ServiceProvider.html", "link": "WeChat/Menu/ServiceProvider.html#method_register", "name": "WeChat\\Menu\\ServiceProvider::register", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Message", "fromLink": "WeChat/Message.html", "link": "WeChat/Message/AutoReplyRule.html", "name": "WeChat\\Message\\AutoReplyRule", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Message\\AutoReplyRule", "fromLink": "WeChat/Message/AutoReplyRule.html", "link": "WeChat/Message/AutoReplyRule.html#method___construct", "name": "WeChat\\Message\\AutoReplyRule::__construct", "doc": "&quot;\u83b7\u53d6\u516c\u4f17\u53f7\u7684\u81ea\u52a8\u56de\u590d\u89c4\u5219.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Message\\AutoReplyRule", "fromLink": "WeChat/Message/AutoReplyRule.html", "link": "WeChat/Message/AutoReplyRule.html#method_get", "name": "WeChat\\Message\\AutoReplyRule::get", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Message", "fromLink": "WeChat/Message.html", "link": "WeChat/Message/ServiceProvider.html", "name": "WeChat\\Message\\ServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Message\\ServiceProvider", "fromLink": "WeChat/Message/ServiceProvider.html", "link": "WeChat/Message/ServiceProvider.html#method_register", "name": "WeChat\\Message\\ServiceProvider::register", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Message", "fromLink": "WeChat/Message.html", "link": "WeChat/Message/Subscribe.html", "name": "WeChat\\Message\\Subscribe", "doc": "&quot;\u4e00\u6b21\u6027\u8ba2\u9605\u6d88\u606f.&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Message\\Subscribe", "fromLink": "WeChat/Message/Subscribe.html", "link": "WeChat/Message/Subscribe.html#method_confirm", "name": "WeChat\\Message\\Subscribe::confirm", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Message\\Subscribe", "fromLink": "WeChat/Message/Subscribe.html", "link": "WeChat/Message/Subscribe.html#method_callback", "name": "WeChat\\Message\\Subscribe::callback", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\OAuth", "fromLink": "WeChat/OAuth.html", "link": "WeChat/OAuth/Client.html", "name": "WeChat\\OAuth\\Client", "doc": "&quot;Class OAuth.&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\OAuth\\Client", "fromLink": "WeChat/OAuth/Client.html", "link": "WeChat/OAuth/Client.html#method___construct", "name": "WeChat\\OAuth\\Client::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\OAuth\\Client", "fromLink": "WeChat/OAuth/Client.html", "link": "WeChat/OAuth/Client.html#method_login", "name": "WeChat\\OAuth\\Client::login", "doc": "&quot;\u8fd4\u56de\u767b\u5f55\u9875\u9762.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\OAuth\\Client", "fromLink": "WeChat/OAuth/Client.html", "link": "WeChat/OAuth/Client.html#method_callback", "name": "WeChat\\OAuth\\Client::callback", "doc": "&quot;\u56de\u8c03\u9875\u9762.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\OAuth\\Client", "fromLink": "WeChat/OAuth/Client.html", "link": "WeChat/OAuth/Client.html#method_refreshAccessToken", "name": "WeChat\\OAuth\\Client::refreshAccessToken", "doc": "&quot;\u5237\u65b0 AccessToken.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\OAuth\\Client", "fromLink": "WeChat/OAuth/Client.html", "link": "WeChat/OAuth/Client.html#method_vaildAccessToken", "name": "WeChat\\OAuth\\Client::vaildAccessToken", "doc": "&quot;\u9a8c\u8bc1 AccessToken.&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\QRC", "fromLink": "WeChat/QRC.html", "link": "WeChat/QRC/Client.html", "name": "WeChat\\QRC\\Client", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\QRC\\Client", "fromLink": "WeChat/QRC/Client.html", "link": "WeChat/QRC/Client.html#method___construct", "name": "WeChat\\QRC\\Client::__construct", "doc": "&quot;QRCode constructor.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\QRC\\Client", "fromLink": "WeChat/QRC/Client.html", "link": "WeChat/QRC/Client.html#method_createForever", "name": "WeChat\\QRC\\Client::createForever", "doc": "&quot;\u521b\u5efa\u6c38\u4e45\u4e8c\u7ef4\u7801&quot;"},
                    {"type": "Method", "fromName": "WeChat\\QRC\\Client", "fromLink": "WeChat/QRC/Client.html", "link": "WeChat/QRC/Client.html#method_createTemp", "name": "WeChat\\QRC\\Client::createTemp", "doc": "&quot;\u521b\u5efa\u4e34\u65f6\u4e8c\u7ef4\u7801&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Server", "fromLink": "WeChat/Server.html", "link": "WeChat/Server/Server.html", "name": "WeChat\\Server\\Server", "doc": "&quot;Class Message.&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Server\\Server", "fromLink": "WeChat/Server/Server.html", "link": "WeChat/Server/Server.html#method___construct", "name": "WeChat\\Server\\Server::__construct", "doc": "&quot;Client constructor.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Server\\Server", "fromLink": "WeChat/Server/Server.html", "link": "WeChat/Server/Server.html#method_handle", "name": "WeChat\\Server\\Server::handle", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Server\\Server", "fromLink": "WeChat/Server/Server.html", "link": "WeChat/Server/Server.html#method_pushHandler", "name": "WeChat\\Server\\Server::pushHandler", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Server\\Server", "fromLink": "WeChat/Server/Server.html", "link": "WeChat/Server/Server.html#method_register", "name": "WeChat\\Server\\Server::register", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Server\\Server", "fromLink": "WeChat/Server/Server.html", "link": "WeChat/Server/Server.html#method_aiChat", "name": "WeChat\\Server\\Server::aiChat", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Server", "fromLink": "WeChat/Server.html", "link": "WeChat/Server/ServiceProvider.html", "name": "WeChat\\Server\\ServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Server\\ServiceProvider", "fromLink": "WeChat/Server/ServiceProvider.html", "link": "WeChat/Server/ServiceProvider.html#method_register", "name": "WeChat\\Server\\ServiceProvider::register", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat", "fromLink": "WeChat.html", "link": "WeChat/ServiceProvider.html", "name": "WeChat\\ServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\ServiceProvider", "fromLink": "WeChat/ServiceProvider.html", "link": "WeChat/ServiceProvider.html#method_boot", "name": "WeChat\\ServiceProvider::boot", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\ServiceProvider", "fromLink": "WeChat/ServiceProvider.html", "link": "WeChat/ServiceProvider.html#method_register", "name": "WeChat\\ServiceProvider::register", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\ServiceProvider", "fromLink": "WeChat/ServiceProvider.html", "link": "WeChat/ServiceProvider.html#method_connection", "name": "WeChat\\ServiceProvider::connection", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Temp", "fromLink": "WeChat/Temp.html", "link": "WeChat/Temp/Client.html", "name": "WeChat\\Temp\\Client", "doc": "&quot;Class Temp.&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Temp\\Client", "fromLink": "WeChat/Temp/Client.html", "link": "WeChat/Temp/Client.html#method___construct", "name": "WeChat\\Temp\\Client::__construct", "doc": "&quot;Temp constructor.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Temp\\Client", "fromLink": "WeChat/Temp/Client.html", "link": "WeChat/Temp/Client.html#method_add", "name": "WeChat\\Temp\\Client::add", "doc": "&quot;\u65b0\u589e\u4e34\u65f6\u7d20\u6750.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Temp\\Client", "fromLink": "WeChat/Temp/Client.html", "link": "WeChat/Temp/Client.html#method_download", "name": "WeChat\\Temp\\Client::download", "doc": "&quot;\u83b7\u53d6\u4e34\u65f6\u7d20\u6750.&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Temp", "fromLink": "WeChat/Temp.html", "link": "WeChat/Temp/ServiceProvider.html", "name": "WeChat\\Temp\\ServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Temp\\ServiceProvider", "fromLink": "WeChat/Temp/ServiceProvider.html", "link": "WeChat/Temp/ServiceProvider.html#method_register", "name": "WeChat\\Temp\\ServiceProvider::register", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Template", "fromLink": "WeChat/Template.html", "link": "WeChat/Template/Client.html", "name": "WeChat\\Template\\Client", "doc": "&quot;\u6a21\u677f\u6d88\u606f.&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Template\\Client", "fromLink": "WeChat/Template/Client.html", "link": "WeChat/Template/Client.html#method___construct", "name": "WeChat\\Template\\Client::__construct", "doc": "&quot;Template constructor.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Template\\Client", "fromLink": "WeChat/Template/Client.html", "link": "WeChat/Template/Client.html#method_setIndustry", "name": "WeChat\\Template\\Client::setIndustry", "doc": "&quot;\u8bbe\u7f6e\u6240\u5c5e\u884c\u4e1a.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Template\\Client", "fromLink": "WeChat/Template/Client.html", "link": "WeChat/Template/Client.html#method_getIndustry", "name": "WeChat\\Template\\Client::getIndustry", "doc": "&quot;\u83b7\u53d6\u8bbe\u7f6e\u7684\u884c\u4e1a\u4fe1\u606f&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Template\\Client", "fromLink": "WeChat/Template/Client.html", "link": "WeChat/Template/Client.html#method_getTemplateId", "name": "WeChat\\Template\\Client::getTemplateId", "doc": "&quot;\u83b7\u53d6\u6a21\u677f\u5e93\u4e2d\u7684\u6a21\u677f\u7684 ID.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Template\\Client", "fromLink": "WeChat/Template/Client.html", "link": "WeChat/Template/Client.html#method_getList", "name": "WeChat\\Template\\Client::getList", "doc": "&quot;\u83b7\u53d6\u6a21\u677f\u5217\u8868.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Template\\Client", "fromLink": "WeChat/Template/Client.html", "link": "WeChat/Template/Client.html#method_delete", "name": "WeChat\\Template\\Client::delete", "doc": "&quot;\u5220\u9664\u6a21\u677f&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Template\\Client", "fromLink": "WeChat/Template/Client.html", "link": "WeChat/Template/Client.html#method_send", "name": "WeChat\\Template\\Client::send", "doc": "&quot;\u53d1\u9001\u6a21\u677f\u6d88\u606f.&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Template", "fromLink": "WeChat/Template.html", "link": "WeChat/Template/ServiceProvider.html", "name": "WeChat\\Template\\ServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Template\\ServiceProvider", "fromLink": "WeChat/Template/ServiceProvider.html", "link": "WeChat/Template/ServiceProvider.html#method_register", "name": "WeChat\\Template\\ServiceProvider::register", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Url", "fromLink": "WeChat/Url.html", "link": "WeChat/Url/Client.html", "name": "WeChat\\Url\\Client", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Url\\Client", "fromLink": "WeChat/Url/Client.html", "link": "WeChat/Url/Client.html#method___construct", "name": "WeChat\\Url\\Client::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Url\\Client", "fromLink": "WeChat/Url/Client.html", "link": "WeChat/Url/Client.html#method_shorten", "name": "WeChat\\Url\\Client::shorten", "doc": "&quot;\u957f\u94fe\u63a5\u8f6c\u77ed\u94fe\u63a5.&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Url", "fromLink": "WeChat/Url.html", "link": "WeChat/Url/ServiceProvider.html", "name": "WeChat\\Url\\ServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Url\\ServiceProvider", "fromLink": "WeChat/Url/ServiceProvider.html", "link": "WeChat/Url/ServiceProvider.html#method_register", "name": "WeChat\\Url\\ServiceProvider::register", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Users", "fromLink": "WeChat/Users.html", "link": "WeChat/Users/Black.html", "name": "WeChat\\Users\\Black", "doc": "&quot;Class Black.&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Users\\Black", "fromLink": "WeChat/Users/Black.html", "link": "WeChat/Users/Black.html#method___construct", "name": "WeChat\\Users\\Black::__construct", "doc": "&quot;Black constructor.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Black", "fromLink": "WeChat/Users/Black.html", "link": "WeChat/Users/Black.html#method_get", "name": "WeChat\\Users\\Black::get", "doc": "&quot;\u83b7\u53d6\u9ed1\u540d\u5355\u5217\u8868.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Black", "fromLink": "WeChat/Users/Black.html", "link": "WeChat/Users/Black.html#method_add", "name": "WeChat\\Users\\Black::add", "doc": "&quot;\u62c9\u9ed1\u7528\u6237.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Black", "fromLink": "WeChat/Users/Black.html", "link": "WeChat/Users/Black.html#method_delete", "name": "WeChat\\Users\\Black::delete", "doc": "&quot;\u53d6\u6d88\u62c9\u9ed1\u7528\u6237.&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Users", "fromLink": "WeChat/Users.html", "link": "WeChat/Users/Client.html", "name": "WeChat\\Users\\Client", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Users\\Client", "fromLink": "WeChat/Users/Client.html", "link": "WeChat/Users/Client.html#method___construct", "name": "WeChat\\Users\\Client::__construct", "doc": "&quot;Users constructor.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Client", "fromLink": "WeChat/Users/Client.html", "link": "WeChat/Users/Client.html#method_setNickName", "name": "WeChat\\Users\\Client::setNickName", "doc": "&quot;\u8bbe\u7f6e\u5907\u6ce8.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Client", "fromLink": "WeChat/Users/Client.html", "link": "WeChat/Users/Client.html#method_getUserInfo", "name": "WeChat\\Users\\Client::getUserInfo", "doc": "&quot;\u83b7\u53d6\u7528\u6237\u57fa\u672c\u4fe1\u606f.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Client", "fromLink": "WeChat/Users/Client.html", "link": "WeChat/Users/Client.html#method_batchGetUserInfo", "name": "WeChat\\Users\\Client::batchGetUserInfo", "doc": "&quot;\u6279\u91cf\u83b7\u53d6\u7528\u6237\u6570\u636e.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Client", "fromLink": "WeChat/Users/Client.html", "link": "WeChat/Users/Client.html#method_getUsersList", "name": "WeChat\\Users\\Client::getUsersList", "doc": "&quot;\u83b7\u53d6\u7528\u6237\u5217\u8868.&quot;"},
            
            {"type": "Class", "fromName": "WeChat\\Users", "fromLink": "WeChat/Users.html", "link": "WeChat/Users/Tag.html", "name": "WeChat\\Users\\Tag", "doc": "&quot;Class Tag.&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\Users\\Tag", "fromLink": "WeChat/Users/Tag.html", "link": "WeChat/Users/Tag.html#method___construct", "name": "WeChat\\Users\\Tag::__construct", "doc": "&quot;Tag constructor.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Tag", "fromLink": "WeChat/Users/Tag.html", "link": "WeChat/Users/Tag.html#method_create", "name": "WeChat\\Users\\Tag::create", "doc": "&quot;\u521b\u5efa\u6807\u7b7e.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Tag", "fromLink": "WeChat/Users/Tag.html", "link": "WeChat/Users/Tag.html#method_get", "name": "WeChat\\Users\\Tag::get", "doc": "&quot;\u83b7\u53d6\u516c\u4f17\u53f7\u5df2\u521b\u5efa\u6807\u7b7e.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Tag", "fromLink": "WeChat/Users/Tag.html", "link": "WeChat/Users/Tag.html#method_update", "name": "WeChat\\Users\\Tag::update", "doc": "&quot;\u7f16\u8f91\u6807\u7b7e.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Tag", "fromLink": "WeChat/Users/Tag.html", "link": "WeChat/Users/Tag.html#method_delete", "name": "WeChat\\Users\\Tag::delete", "doc": "&quot;\u5220\u9664\u6807\u7b7e.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Tag", "fromLink": "WeChat/Users/Tag.html", "link": "WeChat/Users/Tag.html#method_getUsers", "name": "WeChat\\Users\\Tag::getUsers", "doc": "&quot;\u83b7\u53d6\u6807\u7b7e\u4e0b\u7528\u6237\u5217\u8868.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Tag", "fromLink": "WeChat/Users/Tag.html", "link": "WeChat/Users/Tag.html#method_batch", "name": "WeChat\\Users\\Tag::batch", "doc": "&quot;\u6279\u91cf\u4e3a\u7528\u6237\u6253\u6807\u7b7e.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Tag", "fromLink": "WeChat/Users/Tag.html", "link": "WeChat/Users/Tag.html#method_batchDelete", "name": "WeChat\\Users\\Tag::batchDelete", "doc": "&quot;\u6279\u91cf\u4e3a\u7528\u6237\u53d6\u6d88\u6807\u7b7e.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\Users\\Tag", "fromLink": "WeChat/Users/Tag.html", "link": "WeChat/Users/Tag.html#method_getUser", "name": "WeChat\\Users\\Tag::getUser", "doc": "&quot;\u83b7\u53d6\u7528\u6237\u8eab\u4e0a\u7684\u6807\u7b7e\u5217\u8868.&quot;"},
            
            {"type": "Class", "fromName": "WeChat", "fromLink": "WeChat.html", "link": "WeChat/WeChat.html", "name": "WeChat\\WeChat", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "WeChat\\WeChat", "fromLink": "WeChat/WeChat.html", "link": "WeChat/WeChat.html#method___construct", "name": "WeChat\\WeChat::__construct", "doc": "&quot;WeChat constructor.&quot;"},
                    {"type": "Method", "fromName": "WeChat\\WeChat", "fromLink": "WeChat/WeChat.html", "link": "WeChat/WeChat.html#method_registryServices", "name": "WeChat\\WeChat::registryServices", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\WeChat", "fromLink": "WeChat/WeChat.html", "link": "WeChat/WeChat.html#method___get", "name": "WeChat\\WeChat::__get", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\WeChat", "fromLink": "WeChat/WeChat.html", "link": "WeChat/WeChat.html#method___call", "name": "WeChat\\WeChat::__call", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "WeChat\\WeChat", "fromLink": "WeChat/WeChat.html", "link": "WeChat/WeChat.html#method_access_token", "name": "WeChat\\WeChat::access_token", "doc": "&quot;&quot;"},
            
            {"type": "Class",  "link": "Wechat.html", "name": "Wechat", "doc": "&quot;&quot;"},
                    
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


