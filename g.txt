PS D:\Mouj> $adb = "D:\sdkk\platform-tools\adb.exe"
PS D:\Mouj> 
PS D:\Mouj> & $adb logcat -v time |
>>     Select-String -Pattern "MoujWebConsole|MoujPageDebug|PermissionRequest|Permission Denial|AudioRecord|Camera|camera|microphone|getUserMedia|WebChromeClient|AndroidRuntime"

10-21 11:06:29.553 I/adbd    (24727): adbd service requested 'shell,v2,TERM=xterm,raw:cmd appops get ir.mouj CAMERA'
10-21 11:06:54.538 I/CameraService( 1449): onUidStateChanged: uid=10046, procState is changed. (0 -> 1)
10-21 11:06:54.550 I/CameraService( 1449): onUidStateChanged: uid=10046, procState is changed. (1 -> 0)
10-21 11:06:54.592 I/CameraService( 1449): onUidStateChanged: uid=10372, procState is changed. (20 -> 2)
10-21 11:06:54.972 I/CameraService( 1449): onUidStateChanged: uid=10372, procState is changed. (2 -> 15)
10-21 11:06:54.973 I/CameraService( 1449): onUidStateChanged: uid=10233, procState is changed. (3 -> 5)
10-21 11:06:55.528 I/CameraService( 1449): onUidStateChanged: uid=10372, procState is changed. (15 -> 19)
10-21 11:07:03.859 V/WindowManagerShell( 2562): Transition requested: android.os.BinderProxy@21cfb0f TransitionRequestInfo { type = OPEN, triggerTask = TaskInfo{userId=0 taskId=17515 displayId=0 isRunning=true 
baseIntent=Intent { act=android.intent.action.MAIN cat=[android.intent.category.HOME] flg=0x10000100 cmp=com.sec.android.app.launcher/.activities.LauncherActivity } 
baseActivity=ComponentInfo{com.sec.android.app.launcher/com.sec.android.app.launcher.Launcher} topActivity=ComponentInfo{com.sec.android.app.launcher/com.sec.android.app.launcher.Launcher} 
origActivity=ComponentInfo{com.sec.android.app.launcher/com.sec.android.app.launcher.activities.LauncherActivity} realActivity=ComponentInfo{com.sec.android.app.launcher/com.sec.android.app.launcher.Launcher} numActivities=1 
lastActiveTime=1781163871 supportsMultiWindow=true resizeMode=2 isResizeable=true minWidth=-1 minHeight=-1 maxWidth=-1 maxHeight=-1 defaultMinSize=220 token=WCT{android.window.IWindowContainerToken$Stub$Proxy@76fa79c} 
topActivityType=2 pictureInPictureParams=null shouldDockBigOverlays=false launchIntoPipHostTaskId=-1 lastParentTaskIdBeforePip=-1 displayCutoutSafeInsets=null topActivityInfo=ActivityInfo{e4415a5 
com.sec.android.app.launcher.activities.LauncherActivity} launchCookies=[android.os.BinderProxy@a49998f] positionInParent=Point(0, 0) parentTaskId=-1 isFocused=true isVisible=false isVisibleRequested=true isSleeping=false 
topActivityInSizeCompat=false topActivityEligibleForLetterboxEducation= false topActivityLetterboxed= false isFromDoubleTap= false topActivityLetterboxVerticalPosition= -1 topActivityLetterboxHorizontalPosition= -1 
topActivityLetterboxWidth=-1 topActivityLetterboxHeight=-1 locusId=null displayAreaFeatureId=1 cameraCompatControlState=hidden originallySupportedMultiWindow=true hasWallpaper=false topActivityInFixedAspectRatio=false 
rootAffinity=null topActivityInDisplayCompat=false topActivityInBoundsCompat=false topActivityBounds=null singleTapFromLetterbox=false isTopTaskInStage=false topActivityUiMode=17 CoverLauncherWidgetTask=false 
CoverScreenTask=false isAllowedSeamlessRotation=false isTopTransparentActivity=true hasPopOver=false}, remoteTransition = null, displayChange = null }
10-21 11:07:03.909 V/WindowManager( 1407): Sent Transition #17533 createdAt=█▒█░-█▓█▒ █▒█▒:█░█╖:█░█│.█╕█╡█░ via request=TransitionRequestInfo { type = OPEN, triggerTask = TaskInfo{userId=0 taskId=17515 displayId=0 
isRunning=true baseIntent=Intent { act=android.intent.action.MAIN cat=[android.intent.category.HOME] flg=0x10000100 cmp=com.sec.android.app.launcher/.activities.LauncherActivity } 
baseActivity=ComponentInfo{com.sec.android.app.launcher/com.sec.android.app.launcher.Launcher} topActivity=ComponentInfo{com.sec.android.app.launcher/com.sec.android.app.launcher.Launcher} 
origActivity=ComponentInfo{com.sec.android.app.launcher/com.sec.android.app.launcher.activities.LauncherActivity} realActivity=ComponentInfo{com.sec.android.app.launcher/com.sec.android.app.launcher.Launcher} numActivities=1 
lastActiveTime=1781163871 supportsMultiWindow=true resizeMode=2 isResizeable=true minWidth=-1 minHeight=-1 maxWidth=-1 maxHeight=-1 defaultMinSize=220 token=WCT{RemoteToken{bced249 Task{ae102cc #17515 type=home 
I=com.sec.android.app.launcher/.activities.LauncherActivity}}} topActivityType=2 pictureInPictureParams=null shouldDockBigOverlays=false launchIntoPipHostTaskId=-1 lastParentTaskIdBeforePip=-1 displayCutoutSafeInsets=null 
topActivityInfo=ActivityInfo{50d182c com.sec.android.app.launcher.activities.LauncherActivity} launchCookies=[android.os.BinderProxy@a24de0] positionInParent=Point(0, 0) parentTaskId=-1 isFocused=true isVisible=false 
isVisibleRequested=true isSleeping=false topActivityInSizeCompat=false topActivityEligibleForLetterboxEducation= false topActivityLetterboxed= false isFromDoubleTap= false topActivityLetterboxVerticalPosition= -1 
topActivityLetterboxHorizontalPosition= -1 topActivityLetterboxWidth=-1 topActivityLetterboxHeight=-1 locusId=null displayAreaFeatureId=1 cameraCompatControlState=hidden originallySupportedMultiWindow=true hasWallpaper=false 
topActivityInFixedAspectRatio=false rootAffinity=null topActivityInDisplayCompat=false topActivityInBoundsCompat=false topActivityBounds=null singleTapFromLetterbox=false isTopTaskInStage=false topActivityUiMode=17 
CoverLauncherWidgetTask=false CoverScreenTask=false isAllowedSeamlessRotation=false isTopTransparentActivity=true hasPopOver=false}, remoteTransition = null, displayChange = null }
10-21 11:07:03.910 I/CameraService( 1449): onUidStateChanged: uid=10046, procState is changed. (0 -> 1)
10-21 11:07:03.920 I/CameraService( 1449): onUidStateChanged: uid=10235, procState is changed. (5 -> 3)
10-21 11:07:03.921 I/CameraService( 1449): onUidStateChanged: uid=10233, procState is changed. (5 -> 3)
10-21 11:07:03.933 I/CameraService( 1449): onUidStateChanged: uid=10046, procState is changed. (1 -> 0)
10-21 11:07:05.577 I/CameraService( 1449): onUidStateChanged: uid=10046, procState is changed. (0 -> 1)
10-21 11:07:05.581 V/WindowManagerShell( 2562): Transition requested: android.os.BinderProxy@34e2cc4 TransitionRequestInfo { type = OPEN, triggerTask = TaskInfo{userId=0 taskId=19713 displayId=0 isRunning=true 
baseIntent=Intent { act=android.intent.action.MAIN cat=[android.intent.category.LAUNCHER] flg=0x10200000 cmp=ir.mouj/.MainActivity } baseActivity=ComponentInfo{ir.mouj/ir.mouj.MainActivity} 
topActivity=ComponentInfo{ir.mouj/ir.mouj.MainActivity} origActivity=null realActivity=ComponentInfo{ir.mouj/ir.mouj.MainActivity} numActivities=1 lastActiveTime=1781165592 supportsMultiWindow=true resizeMode=1 
isResizeable=true minWidth=-1 minHeight=-1 maxWidth=-1 maxHeight=-1 defaultMinSize=220 token=WCT{android.window.IWindowContainerToken$Stub$Proxy@d84f7ad} topActivityType=1 pictureInPictureParams=null 
shouldDockBigOverlays=false launchIntoPipHostTaskId=-1 lastParentTaskIdBeforePip=-1 displayCutoutSafeInsets=Rect(0, 88 - 0, 0) topActivityInfo=ActivityInfo{1e25ae2 ir.mouj.MainActivity} 
launchCookies=[android.os.BinderProxy@1ddbe73] positionInParent=Point(0, 0) parentTaskId=-1 isFocused=false isVisible=false isVisibleRequested=false isSleeping=false topActivityInSizeCompat=false 
topActivityEligibleForLetterboxEducation= false topActivityLetterboxed= false isFromDoubleTap= false topActivityLetterboxVerticalPosition= -1 topActivityLetterboxHorizontalPosition= -1 topActivityLetterboxWidth=-1 
topActivityLetterboxHeight=-1 locusId=null displayAreaFeatureId=1 cameraCompatControlState=hidden originallySupportedMultiWindow=true hasWallpaper=false topActivityInFixedAspectRatio=false rootAffinity=10372:ir.mouj 
topActivityInDisplayCompat=false topActivityInBoundsCompat=false topActivityBounds=null singleTapFromLetterbox=false isTopTaskInStage=false topActivityUiMode=17 CoverLauncherWidgetTask=false CoverScreenTask=false 
isAllowedSeamlessRotation=false isTopTransparentActivity=false hasPopOver=false}, remoteTransition = RemoteTransition { remoteTransition = android.window.IRemoteTransition$Stub$Proxy@b635130, appThread = 
android.app.IApplicationThread$Stub$Proxy@72661a9, debugName = QuickstepLaunch }, displayChange = null }
10-21 11:07:05.635 V/WindowManager( 1407): Sent Transition #17534 createdAt=█▒█░-█▓█▒ █▒█▒:█░█╖:█░█╡.█╡█╢█╡ via request=TransitionRequestInfo { type = OPEN, triggerTask = TaskInfo{userId=0 taskId=19713 displayId=0 
isRunning=true baseIntent=Intent { act=android.intent.action.MAIN cat=[android.intent.category.LAUNCHER] flg=0x10200000 cmp=ir.mouj/.MainActivity } baseActivity=ComponentInfo{ir.mouj/ir.mouj.MainActivity} 
topActivity=ComponentInfo{ir.mouj/ir.mouj.MainActivity} origActivity=null realActivity=ComponentInfo{ir.mouj/ir.mouj.MainActivity} numActivities=1 lastActiveTime=1781165592 supportsMultiWindow=true resizeMode=1 
isResizeable=true minWidth=-1 minHeight=-1 maxWidth=-1 maxHeight=-1 defaultMinSize=220 token=WCT{RemoteToken{c8a1790 Task{b551ad0 #19713 type=standard A=10372:ir.mouj}}} topActivityType=1 pictureInPictureParams=null 
shouldDockBigOverlays=false launchIntoPipHostTaskId=-1 lastParentTaskIdBeforePip=-1 displayCutoutSafeInsets=Rect(0, 88 - 0, 0) topActivityInfo=ActivityInfo{3cc608e ir.mouj.MainActivity} 
launchCookies=[android.os.BinderProxy@f4490af] positionInParent=Point(0, 0) parentTaskId=-1 isFocused=false isVisible=false isVisibleRequested=false isSleeping=false topActivityInSizeCompat=false 
topActivityEligibleForLetterboxEducation= false topActivityLetterboxed= false isFromDoubleTap= false topActivityLetterboxVerticalPosition= -1 topActivityLetterboxHorizontalPosition= -1 topActivityLetterboxWidth=-1 
topActivityLetterboxHeight=-1 locusId=null displayAreaFeatureId=1 cameraCompatControlState=hidden originallySupportedMultiWindow=true hasWallpaper=false topActivityInFixedAspectRatio=false rootAffinity=10372:ir.mouj 
topActivityInDisplayCompat=false topActivityInBoundsCompat=false topActivityBounds=null singleTapFromLetterbox=false isTopTaskInStage=false topActivityUiMode=17 CoverLauncherWidgetTask=false CoverScreenTask=false 
isAllowedSeamlessRotation=false isTopTransparentActivity=false hasPopOver=false}, remoteTransition = RemoteTransition { remoteTransition = android.window.IRemoteTransition$Stub$Proxy@aa11cbc, appThread = 
android.app.IApplicationThread$Stub$Proxy@2c2b445, debugName = QuickstepLaunch }, displayChange = null }
10-21 11:07:06.534 I/CameraManagerGlobal( 8100): Connecting to camera service
10-21 11:07:06.543 D/CameraService( 1449): addListenerHelper: Add listener 0xb400007b94abe190
10-21 11:07:06.544 D/CameraService( 1449): addListenerHelper: CameraDeviceState for CameraManager
10-21 11:07:06.550 I/CameraManagerGlobal( 8100): Camera 0 facing CAMERA_FACING_BACK state now CAMERA_STATE_CLOSED for client com.sec.android.app.camera API Level 2 User Id 0
10-21 11:07:06.551 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:06.551 I/CameraManagerGlobal( 8100): Camera 2 facing CAMERA_FACING_BACK state now CAMERA_STATE_CLOSED for client com.thecat.messenger API Level 1 User Id 0
10-21 11:07:06.551 I/CameraManagerGlobal( 8100): Camera 20 facing CAMERA_FACING_BACK state now CAMERA_STATE_CLOSED for client android.system API Level 2 User Id 0
10-21 11:07:06.551 I/CameraManagerGlobal( 8100): Camera 21 facing CAMERA_FACING_BACK state now CAMERA_STATE_CLOSED for client com.sec.android.app.camera API Level 2 User Id 0
10-21 11:07:06.551 I/CameraManagerGlobal( 8100): Camera 23 facing CAMERA_FACING_BACK state now CAMERA_STATE_CLOSED for client android.system API Level 2 User Id 0
10-21 11:07:06.551 I/CameraManagerGlobal( 8100): Camera 3 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client com.thecat.messenger API Level 1 User Id 0
10-21 11:07:06.551 I/CameraManagerGlobal( 8100): Camera 4 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client client.pid<1589> API Level 2 User Id 0
10-21 11:07:06.552 I/CameraManagerGlobal( 8100): Camera 52 facing CAMERA_FACING_BACK state now CAMERA_STATE_CLOSED for client android.system API Level 2 User Id 0
10-21 11:07:06.552 I/CameraManagerGlobal( 8100): Camera 54 facing CAMERA_FACING_BACK state now CAMERA_STATE_CLOSED for client android.system API Level 2 User Id 0
10-21 11:07:06.555 I/CameraManager( 8100): registerAvailabilityCallback: Is device callback = false
10-21 11:07:06.555 I/CameraManagerGlobal( 8100): postSingleUpdate device: camera id 0 status STATUS_PRESENT
10-21 11:07:06.556 I/CameraManagerGlobal( 8100): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:06.556 I/CameraManagerGlobal( 8100): postSingleUpdate device: camera id 2 status STATUS_PRESENT
10-21 11:07:06.556 I/CameraManagerGlobal( 8100): postSingleUpdate device: camera id 3 status STATUS_PRESENT
10-21 11:07:06.604 I/CameraService( 1449): onUidStateChanged: uid=10235, procState is changed. (3 -> 5)
10-21 11:07:06.682 I/CameraService( 1449): onUidStateChanged: uid=10046, procState is changed. (1 -> 0)
10-21 11:07:06.781 E/MoujPageDebug( 8100): PAGE_FINISHED url=https://chat.radmehrweb.ir/mouj-messenger.html title=┘à┘ê╪¼ | ┘╛█î╪º┘àΓÇî╪▒╪│╪º┘å
10-21 11:07:06.798 E/MoujPageDebug( 8100): GEOMETRY "{\"innerHeight\":800,\"innerWidth\":360,\"viewport\":{\"height\":800,\"width\":360,\"scale\":1},\"screen\":{\"height\":800,\"width\":360},\"doc\":{\"id\":\"\",\"cls\":\"mouj-
android\",\"inline\":null,\"display\":\"block\",\"position\":\"static\",\"height\":\"0px\",\"minHeight\":\"100%\",\"maxHeight\":\"none\",\"offsetHeight\":0,\"clientHeight\":800,\"rect\":{\"x\":0,\"y\":0,\"w\":360,\"h\":0}},\"bo
dy\":{\"id\":\"\",\"cls\":\"auth-mode\",\"inline\":null,\"display\":\"block\",\"position\":\"static\",\"height\":\"0px\",\"minHeight\":\"100%\",\"maxHeight\":\"none\",\"offsetHeight\":0,\"clientHeight\":0,\"rect\":{\"x\":0,\"y\
":0,\"w\":360,\"h\":0}},\"app\":{\"id\":\"appRoot\",\"cls\":\"app\",\"inline\":null,\"display\":\"block\",\"position\":\"relative\",\"height\":\"0px\",\"minHeight\":\"0px\",\"maxHeight\":\"none\",\"offsetHeight\":0,\"clientHeig
ht\":0,\"rect\":{\"x\":0,\"y\":0,\"w\":360,\"h\":0}},\"phone\":{\"id\":\"phone\",\"cls\":\"screen on auth\",\"inline\":null,\"display\":\"flex\",\"position\":\"relative\",\"height\":\"54px\",\"minHeight\":\"0px\",\"maxHeight\":
\"none\",\"offsetHeight\":54,\"clientHeight\":54,\"rect\":{\"x\":0,\"y\":0,\"w\":360,\"h\":54}},\"bodyClass\":\"auth-mode\",\"appClass\":\"app\"}"
10-21 11:07:06.798 E/MoujPageDebug( 8100): CSS_RULES "{\"rules\":[{\"error\":\"SecurityError: Failed to read the 'cssRules' property from 'CSSStyleSheet': Cannot access rules\"},{\"selector\":\"html, 
body\",\"css\":{\"height\":\"100%\"}},{\"selector\":\"body\",\"css\":{\"display\":\"grid\",\"overflow\":\"hidden\",\"place-items\":\"center\",\"align-items\":\"center\"}},{\"selector\":\".app\",\"css\":{\"height\":\"min(920px, 
96vh)\",\"position\":\"relative\",\"overflow\":\"hidden\"}},{\"selector\":\"body.auth-mode .app > #home, body.auth-mode .app > #chat, body.auth-mode .app > 
.desktop-empty\",\"css\":{\"display\":\"none\"}},{\"selector\":\"body.auth-mode #phone.screen.on, body.auth-mode #otp.screen.on, body.auth-mode 
#profile.screen.on\",\"css\":{\"height\":\"100%\",\"display\":\"flex\",\"position\":\"relative\"}},{\"selector\":\".preview-body\",\"css\":{\"overflow\":\"auto\"}},{\"selector\":\".app\",\"css\":{\"height\":\"min(920px, 
100dvh, 100vh)\"}},{\"selector\":\".reply-bar .rb-body\",\"css\":{\"overflow\":\"hidden\"}},{\"selector\":\"html, body, 
#appRoot\",\"css\":{\"min-height\":\"0px\"}},{\"selector\":\"body\",\"css\":{\"min-height\":\"100dvh\"}},{\"selector\":\"html.mouj-archive-settings 
.desktop-archive-setting\",\"css\":{\"display\":\"flex\"}},{\"selector\":\"html.mouj-android .desktop-archive-setting\",\"css\":{\"display\":\"none\"}},{\"selector\":\"html.mouj-android 
.android-shake-setting\",\"css\":{\"display\":\"flex\"}},{\"selector\":\"html:not(.mouj-android) .android-shake-setting\",\"css\":{\"display\":\"none\"}},{\"selector\":\"html, body\",\"css\":{\"min-height\":\"100%\",\"overflow\
":\"hidden\"}},{\"selector\":\".app\",\"css\":{\"height\":\"100dvh\",\"max-height\":\"100dvh\"}},{\"selector\":\".detail-body\",\"css\":{\"overflow\":\"auto\"}}],\"htmlStyle\":null,\"bodyStyle\":null,\"appStyle\":null}"
10-21 11:07:06.798 E/MoujPageDebug( 8100): HEIGHT_TEST "{\"html\":\"0px\",\"body\":\"0px\",\"app\":\"0px\",\"phone\":\"54px\"}"
10-21 11:07:06.798 E/MoujPageDebug( 8100): HEIGHT_DEBUG2 "{\"styleExists\":true,\"styleText\":\"html,body{height:100%!important;min-height:100dvh!important}#appRoot{height:100dvh!important;min-height:100dvh!important;width:100%
!important}\",\"html\":{\"height\":\"0px\",\"minHeight\":\"0px\",\"offsetHeight\":0,\"clientHeight\":800},\"body\":{\"height\":\"0px\",\"minHeight\":\"0px\",\"offsetHeight\":0,\"clientHeight\":0},\"elements\":[{\"id\":\"appRoot
\",\"cssHeight\":\"0px\",\"cssMinHeight\":\"0px\",\"inline\":\"\",\"offsetHeight\":0,\"rectHeight\":0},{\"id\":\"phone\",\"cssHeight\":\"54px\",\"cssMinHeight\":\"0px\",\"inline\":\"\",\"offsetHeight\":54,\"rectHeight\":54}],\"
viewport\":800}"
10-21 11:07:06.798 E/MoujPageDebug( 8100): HEIGHT_DEBUG3 "{\"before\":{\"h\":\"\",\"b\":\"\",\"a\":\"\"},\"after\":{\"html\":{\"inline\":\"height: 800px 
!important;\",\"height\":\"800px\",\"minHeight\":\"0px\",\"offsetHeight\":800,\"rect\":800},\"body\":{\"inline\":\"height: 800px 
!important;\",\"height\":\"800px\",\"minHeight\":\"0px\",\"offsetHeight\":800,\"rect\":800},\"app\":{\"inline\":\"height: 800px !important;\",\"height\":\"800px\",\"minHeight\":\"0px\",\"offsetHeight\":800,\"rect\":800},\"phone
\":{\"inline\":\"\",\"height\":\"800px\",\"minHeight\":\"0px\",\"offsetHeight\":800,\"rect\":800}},\"viewport\":800,\"errors\":[]}"
10-21 11:07:06.798 E/MoujPageDebug( 8100): PAGE_STATE "{\"url\":\"https://chat.radmehrweb.ir/mouj-messenger.html\",\"readyState\":\"complete\",\"title\":\"┘à┘ê╪¼ | 
┘╛█î╪º┘àΓÇî╪▒╪│╪º┘å\",\"bodyLength\":700,\"htmlLength\":308707,\"bodyBackground\":\"rgb(244, 247, 251)\",\"bodyText\":\"┘à┘ê╪¼\\n┘╛█î╪º┘àΓÇî╪▒╪│╪º┘å█î ┘ê╪º┘é╪╣█î╪î ╪│╪▒█î╪╣ ┘ê ╪▒┘ê╪º┘å\\n╪┤┘à╪º╪▒┘ç ┘à┘ê╪¿╪º█î┘ä\\n╪¿╪▒╪º█î 
┘ê╪▒┘ê╪»╪î ┌⌐╪» ╪¬╪º█î█î╪» ╪¿┘ç ╪┤┘à╪º╪▒┘ç ╪┤┘à╪º ╪º╪▒╪│╪º┘ä ┘à█îΓÇî╪┤┘ê╪».\\n+98\\n╪º╪»╪º┘à┘ç\\n≡ƒÆ¼\\n┌å╪¬ ╪¼╪»█î╪»\\n╪┤╪▒┘ê╪╣ ┌»┘ü╪¬┌»┘ê ╪¿╪º █î┌⌐ ┘å┘ü╪▒\\n≡ƒæñ\\n╪º┘ü╪▓┘ê╪»┘å ┘à╪«╪º╪╖╪¿\\n╪¿╪º ╪┤┘à╪º╪▒┘ç 
┘à┘ê╪¿╪º█î┘ä\\n≡ƒæÑ\\n╪º█î╪¼╪º╪» ┌»╪▒┘ê┘ç\\n┌»┘ü╪¬┌»┘ê█î ┌»╪▒┘ê┘ç█î\\n≡ƒôó\\n╪º█î╪¼╪º╪» ┌⌐╪º┘å╪º┘ä\\n╪º┘å╪¬╪┤╪º╪▒ ┘à╪¡╪¬┘ê╪º\\n≡ƒô▒\\n┘ç┘à┌»╪º┘àΓÇî╪│╪º╪▓█î ┘à╪«╪º╪╖╪¿█î┘å\\n╪º╪▓ ╪»┘ü╪¬╪▒┌å┘ç ╪¬┘ä┘ü┘å ┌»┘ê╪┤█î\\n/* Final chat 
scroll safety override */ .chat{display:flex!important;flex-direction:column!important;min-height:0!important;height:100%!important;overflow:hidden!important} .chat .messages{display:flex!important;flex:1 1 auto!important\",\"n
odes\":[{\"id\":\"appRoot\",\"exists\":true,\"display\":\"block\",\"visibility\":\"visible\",\"rect\":\"{\\\"x\\\":0,\\\"y\\\":0,\\\"width\\\":360,\\\"height\\\":800,\\\"top\\\":0,\\\"right\\\":360,\\\"bottom\\\":800,\\\"left\\
\":0}\"},{\"id\":\"phone\",\"exists\":true,\"display\":\"flex\",\"visibility\":\"visible\",\"rect\":\"{\\\"x\\\":0,\\\"y\\\":0,\\\"width\\\":360,\\\"height\\\":800,\\\"top\\\":0,\\\"right\\\":360,\\\"bottom\\\":800,\\\"left\\\"
:0}\"},{\"id\":\"otp\",\"exists\":true,\"display\":\"none\",\"visibility\":\"visible\",\"rect\":\"{\\\"x\\\":0,\\\"y\\\":0,\\\"width\\\":0,\\\"height\\\":0,\\\"top\\\":0,\\\"right\\\":0,\\\"bottom\\\":0,\\\"left\\\":0}\"},{\"id
\":\"profile\",\"exists\":true,\"display\":\"none\",\"visibility\":\"visible\",\"rect\":\"{\\\"x\\\":0,\\\"y\\\":0,\\\"width\\\":0,\\\"height\\\":0,\\\"top\\\":0,\\\"right\\\":0,\\\"bottom\\\":0,\\\"left\\\":0}\"},{\"id\":\"hom
e\",\"exists\":true,\"display\":\"none\",\"visibility\":\"visible\",\"rect\":\"{\\\"x\\\":0,\\\"y\\\":0,\\\"width\\\":0,\\\"height\\\":0,\\\"top\\\":0,\\\"right\\\":0,\\\"bottom\\\":0,\\\"left\\\":0}\"},{\"id\":\"chat\",\"exist
s\":true,\"display\":\"none\",\"visibility\":\"visible\",\"rect\":\"{\\\"x\\\":0,\\\"y\\\":0,\\\"width\\\":0,\\\"height\\\":0,\\\"top\\\":0,\\\"right\\\":0,\\\"bottom\\\":0,\\\"left\\\":0}\"},{\"id\":\"desktopEmpty\",\"exists\"
:true,\"display\":\"none\",\"visibility\":\"visible\",\"rect\":\"{\\\"x\\\":0,\\\"y\\\":0,\\\"width\\\":0,\\\"height\\\":0,\\\"top\\\":0,\\\"right\\\":0,\\\"bottom\\\":0,\\\"left\\\":0}\"}]}"
10-21 11:07:07.424 I/CameraService( 1449): CameraService::connect call (PID 8100 "ir.mouj", camera ID 1) and Camera API version 2
10-21 11:07:07.424 I/CameraService( 1449): isUidActiveLocked E: uid 10372, callingPackage ir.mouj, isRegistered true
10-21 11:07:07.424 I/CameraService( 1449): isUidActiveLocked X: uid 10372, callingPackage ir.mouj, isActive true.
10-21 11:07:07.425 I/EDMNativeHelperService( 1407): isCameraEnabled
10-21 11:07:07.425 D/EDMNativeHelper( 1407): isCameraEnabled
10-21 11:07:07.426 D/EDMNativeHelper( 1407): checking for camera in EnterpriseDeviceManagerService
10-21 11:07:07.426 D/EnterpriseDeviceManagerService( 1407): isCameraEnabledNative
10-21 11:07:07.426 D/EnterpriseDeviceManagerService( 1407): checking for camera in restriction policy
10-21 11:07:07.426 D/RestrictionPolicy( 1407): isCameraEnabled ret(true) userId(0) cxtInfo.mCallerUid(10372) cxtInfo.mContainerId(0)
10-21 11:07:07.427 I/CameraService( 1449): CameraService::validateClientPermissionsLocked is ok : calling pid 8100, calling uid 10372, client ir.mouj , cameraservice pid=1449, device user 0, currently allowed device users: 0
10-21 11:07:07.427 I/CameraService( 1449): CameraService::handleEvictionsLocked
10-21 11:07:07.428 I/CameraService( 1449): wouldEvictLocked: [incoming client] owner = 8100, priority-score=0, cost=100, returnIncompatibleClients=false
10-21 11:07:07.428 I/CameraService( 1449): wouldEvictLocked: [cost info] current cost=0, adding cost=100, total cost=100, max cost=100
10-21 11:07:07.428 I/CameraService( 1449): wouldEvictLocked: [highestPriority] owner=8100, score=0
10-21 11:07:07.428 I/CameraFlashlight( 1449): prepareDeviceOpen: prepare for device open(cameraId=1)
10-21 11:07:07.428 I/Camera2ClientBase( 1449): Camera 1: Opened. Client: ir.mouj (PID 8100, UID 10372)
10-21 11:07:07.428 I/CameraDeviceClient( 1449): CameraDeviceClient 1: Opened
10-21 11:07:07.428 I/CameraService( 1449): isNoSALoggingPackage: ir.mouj is a third party package.
10-21 11:07:07.428 I/CameraService( 1449): makeClient: Camera2 API, override to portrait 0
10-21 11:07:07.429 I/CameraService( 1449): service.camera.client set to ir.mouj
10-21 11:07:07.429 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.429 I/Camera2ClientBase( 1449): initializeImpl: Initializing client for camera 1
10-21 11:07:07.429 D/ijt/Camera3-RequestInjector( 1449): RequestInjector[1] Mapper created
10-21 11:07:07.429 I/Camera3-Device( 1449): Camera3Device: Created device for camera 1
10-21 11:07:07.429 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.429 D/HidlCamera3-Device( 1449): CameraPerf: initialize E
10-21 11:07:07.429 D/HidlCamera3-Device( 1449): initialize: mInterfaceLock.lock()
10-21 11:07:07.429 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.430 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.430 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.430 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.430 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.430 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.430 I/CameraProviderManager( 1449): openHidlSession, using trampoline for v5.0
10-21 11:07:07.430 D/CameraProviderManager( 1449): CameraPerf: openHidlSession E
10-21 11:07:07.430 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.430 I/SehCamDev@5.0-impl( 1108): [CAMKPI] camera3->open : E
10-21 11:07:07.430 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_open_camera_hardware: 550: E cameraName: 1
10-21 11:07:07.430 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_open_camera_hardware: 552: UNIHAL_VERSION = "2.15"
10-21 11:07:07.430 I/Unihal  ( 1108): CameraDevice.cpp: OpenCameraHardware_v3: 401: name : 1 camera id : 1
10-21 11:07:07.430 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.430 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.430 I/CameraProviderManager( 1449): Camera device device@3.5/legacy/1 torch status is now NOT_AVAILABLE
10-21 11:07:07.430 I/CameraService( 1449): onTorchStatusChangedLocked: Torch status changed for cameraId=1, newStatus=0
10-21 11:07:07.430 E/CameraService( 1449): onTorchStatusChangedLocked: cannot get torch status of camera 1: No such file or directory (-2)
10-21 11:07:07.432 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.432 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.432 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.433 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.434 I/RequestInjectorService( 1407): Camera is opening. Start VT Camera Setting. cameraId(1), displayId(█░)
10-21 11:07:07.440 W/VSET/ObserveCameraStateService( 6368): onCreate
10-21 11:07:07.440 I/VSET/ObserveCameraStateService( 6368): initAppRepository 
10-21 11:07:07.441 I/VSET/ObserveCameraStateService( 6368): initViewModels: X
10-21 11:07:07.441 I/VSET/ObserveCameraStateService( 6368): onCreate : unihal 3.01
10-21 11:07:07.441 I/VSET/ObserveCameraStateService( 6368): onStartCommand : unihal 3.01
10-21 11:07:07.441 I/VSET/ObserveCameraStateService( 6368): initAppRepository is created already
10-21 11:07:07.443 I/VSET/ObserveCameraStateService( 6368): onStartCommand: true
10-21 11:07:07.444 D/PackageManager( 1407): setEnabledSetting : userId = 0 packageName = com.samsung.android.vtcamerasettings cmp = com.samsung.android.vtcamerasettings.settings.SettingsActivity newState = 1 callingPackage = 
com.samsung.android.vtcamerasettings
10-21 11:07:07.447 I/Unihal  ( 1108): ParameterManager.cpp: SetCameraCharacteristics: 116: Registered camera characteristics successfully. : cameraId=1, characteristics=0xb400007c150dd560
10-21 11:07:07.447 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_open_camera_hardware: 578: X (0)
10-21 11:07:07.447 I/SehCamDev@5.0-impl( 1108): [CAMKPI] camera3->open : X
10-21 11:07:07.450 D/ApplicationPolicy( 1407): getApplicationStateEnabled : pkg = com.samsung.android.vtcamerasettings userId : 0
10-21 11:07:07.452 D/ApplicationPolicy( 1407): getApplicationComponentState : pkg = com.samsung.android.vtcamerasettings userId : 0
10-21 11:07:07.457 I/VSET/ObserveCameraStateService( 6368): onStartCommand: update SALogging status
10-21 11:07:07.458 I/VSET/ObserveCameraStateService( 6368): processDeviceInjectorIntent: not supported device injector
10-21 11:07:07.465 D/CameraProviderManager( 1449): CameraPerf: openHidlSession X (35ms)
10-21 11:07:07.467 I/VSET/ObserveCameraStateService( 6368): updateAppInfoRepository: E 
10-21 11:07:07.467 I/VSET/ObserveCameraStateService( 6368): initAppRepository is created already
10-21 11:07:07.470 D/HidlCamera3-Device( 1449): CameraPerf: initialize X (40ms)
10-21 11:07:07.470 D/Camera3-Device( 1449): CameraPerf: initializeCommonLocked: E
10-21 11:07:07.472 I/Camera3-Status( 1449): addComponent: Adding new component 0 - InflightRequests
10-21 11:07:07.472 I/Camera3-Status( 1449): addComponent: Adding new component 1 - RequestThread
10-21 11:07:07.472 D/Camera3-Device( 1449): initializeCommonLocked mTimestampOffset = 1155765056712711ns.
10-21 11:07:07.473 D/Camera3-Device( 1449): CameraPerf: initializeCommonLocked: X (2ms)
10-21 11:07:07.473 I/CameraService( 1449): startCameraOps: Start camera ops, package name = ir.mouj, client UID = 10372
10-21 11:07:07.475 I/VSET/ObserveCameraStateService( 6368): requestStopService
10-21 11:07:07.476 I/VSET/RemoteCameraStatusPreferenceLiveData( 6368): updatePreferenceValue: !!!
10-21 11:07:07.477 I/VSET/ObserveCameraStateService( 6368): getRemoteCameraStatusPreferenceLiveData: null
10-21 11:07:07.477 W/VSET/ObserveCameraStateService( 6368): getRemoteCameraStatusPreferenceLiveData: maybe not ready.
10-21 11:07:07.477 I/VSET/RemoteCameraStatusPreferenceLiveData( 6368): setPreferenceValue: null
10-21 11:07:07.485 W/VSET/RemoteCameraStatusPreferenceLiveData( 6368): onActive failed start observer java.lang.SecurityException: Failed to find provider com.samsung.android.hwresourceshare.RemoteCameraInfoProvider for user 
0; expected to find a valid ContentProvider for this authority
10-21 11:07:07.486 I/CameraService( 1449): increaseCamConnRef: ref=1
10-21 11:07:07.487 I/CameraService( 1449): increaseCamConnRef: service.camera.running set to 1
10-21 11:07:07.487 I/VSET/ObserveCameraStateService( 6368): getFloatingViewStatusLiveData: 4
10-21 11:07:07.488 I/CameraManagerGlobal( 4699): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.488 I/CameraManagerGlobal(14831): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.488 I/CameraManagerGlobal( 4699): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.488 I/CameraManagerGlobal(10793): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.489 I/CameraManagerGlobal(18970): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.489 I/CameraManagerGlobal( 8100): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.489 I/CameraManagerGlobal( 6629): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.489 E/Camera2-FrameProcessorBase( 1449): FrameProcessorBase: created
10-21 11:07:07.490 I/IC_Service[1.2.93]( 6629): onCameraUnavailable(1)
10-21 11:07:07.490 E/Camera2-FrameProcessorBase( 1449): registerListener: Registering listener for frame id range 0 - 2147483647
10-21 11:07:07.492 I/CameraService( 1449): connectHelper: overrideCameraMuteMode = false, isCameraPrivacyEnabled = false
10-21 11:07:07.492 I/Camera3-Device( 1449): setCameraMute, enabled = false, supported = true
10-21 11:07:07.492 I/CameraService( 1449): CameraService::finishConnectLocked E
10-21 11:07:07.492 I/CameraService( 1449): wouldEvictLocked: [incoming client] owner = 8100, priority-score=0, cost=100, returnIncompatibleClients=false
10-21 11:07:07.492 I/CameraService( 1449): wouldEvictLocked: [cost info] current cost=0, adding cost=100, total cost=100, max cost=100
10-21 11:07:07.492 I/CameraService( 1449): wouldEvictLocked: [highestPriority] owner=8100, score=0
10-21 11:07:07.492 I/CameraManagerGlobal( 5245): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.494 D/BatteryExternalStatsWorker( 1407): update stats : camera-on (64)
10-21 11:07:07.494 I/CameraService_worker( 1407): DeviceInjector, onSemCameraDeviceRawStatus 1 -2
10-21 11:07:07.494 I/CameraService( 1449): addAndEvict: push the client(owner 8100, priorityScore 0, state 2) to mClients
10-21 11:07:07.494 I/CameraService( 1449): CameraService::finishConnectLocked X
10-21 11:07:07.495 I/CameraDeviceClient( 1449): notifyAppPackageName
10-21 11:07:07.495 D/HidlCamera3-Device( 1449): CameraPerf: setParameters E
10-21 11:07:07.496 D/HidlCamera3-Device( 1449): CameraPerf: setParameters X (0ms)
10-21 11:07:07.496 I/CameraService( 1449): Notified package name to HAL.
10-21 11:07:07.496 I/CameraService( 1449): connectHelper: Skip Request Injector ExtraRequests to new client(ir.mouj)
10-21 11:07:07.496 I/CameraServiceProxyWrapper( 1449): updateProxyDeviceState: notifyCameraState for Camera ID 1, newState 0, facing 1, clientName ir.mouj, apiLevel 2
10-21 11:07:07.496 I/CameraManagerGlobal( 1407): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.496 I/CameraManagerGlobal( 1407): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.496 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.497 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.497 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.497 I/AudioManager( 1407): setParameters keyValuePairs = cameraFacing=front
10-21 11:07:07.497 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.497 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.498 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.498 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.498 D/audio_hw_primary( 1075): adev_set_parameters: enter: cameraFacing=front
10-21 11:07:07.498 I/CameraService( 1449): isNoSALoggingPackage: ir.mouj is a third party package.
10-21 11:07:07.498 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.499 D/cameraserver( 1449): FGS Logger Transaction failed
10-21 11:07:07.499 D/cameraserver( 1449): -129
10-21 11:07:07.499 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.501 E/cr_VideoCapture( 8100): CameraDevice.StateCallback onOpened
10-21 11:07:07.499 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.502 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.503 D/CameraAvailabilityListener( 2562): onCameraDeviceStateChanged: id=1, facing=1, state=CAMERA_STATE_OPEN, client=ir.mouj
10-21 11:07:07.504 I/HBD     ( 5245): k Camera is used by another app, camId = 1 
10-21 11:07:07.504 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.505 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.505 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.506 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.509 I/lmkd    (  629): check CAMERA OPEN -12548, memlimit: 83524, other_free: 33594, saved_ion_idle_camera: 0, cameraprocsize: 62478, kgsl: 103303, vmallocapi: 59372, diff_available: -20702 
10-21 11:07:07.509 I/lmkd    (  629): check finished camerakillboostmode
10-21 11:07:07.512 I/CameraService_proxy( 1407): Notify nfc service : camera open was(false) -> now(true) = polling(false)
10-21 11:07:07.517 D/HidlCamera3-Device( 1449): CameraPerf: constructDefaultRequestSettings templateId: 1 E
10-21 11:07:07.518 D/NfcService( 2807): setReaderMode: uid=1000, packageName: com.samsung.android.cameraxservice, flags: 4096
10-21 11:07:07.520 D/HidlCamera3-Device( 1449): CameraPerf: constructDefaultRequestSettings X (2ms)
10-21 11:07:07.528 I/WindowManager( 2562): WindowManagerGlobal#addView, ty=2024, view=com.android.systemui.RegionInterceptingFrameLayout{1ed9ae9 V.E...... ......I. 0,0-0,0}, caller=android.view.WindowManagerImpl.addView:150 
com.android.systemui.ScreenDecorations.setupDecorations:804 com.android.systemui.ScreenDecorations$1.onApplyCameraProtection:54 
10-21 11:07:07.554 D/Camera3-Device( 1449): waitUntilDrained: mInterfaceLock.unlock()
10-21 11:07:07.557 D/CameraDeviceClient( 1449): createStream E
10-21 11:07:07.557 D/SessionConfigUtils( 1449): createSurfaceFromGbp E: logicalCameraId=1, isStreamInfoValid=0, useCase=0, option=0x0, mirrorMode=0
10-21 11:07:07.561 D/Camera3-Device( 1449): createStream: mInterfaceLock.lock()
10-21 11:07:07.561 D/Camera3-Device( 1449): createStream: Camera 1: Creating new stream 0: 640 x 480, format 0x23(YUV_420_888), dataspace 146931712 rotation 0 consumer usage 0, isShared 0, physicalCameraId , isMultiResolution 
0 dynamicRangeProfile 0x1, streamUseCase 0, option 0x0, timestampBase 0, mirrorMode 0, colorSpace -1, useReadoutTimestamp 0
10-21 11:07:07.565 D/Camera3-Device( 1449): createStream: mInterfaceLock.unlock()
10-21 11:07:07.565 D/CameraDeviceClient( 1449): createStream: Camera 1: Successfully created a new stream ID 0 for output surface (640 x 480) with format 0x23.
10-21 11:07:07.565 D/Camera3-Device( 1449): setStreamTransform: mInterfaceLock.lock()
10-21 11:07:07.565 D/CameraDeviceClient( 1449): createStream X
10-21 11:07:07.566 D/Camera3-Device( 1449): filterParamsAndConfigureLocked : operatingMode=0
10-21 11:07:07.566 D/Camera3-Device( 1449): CameraPerf: configureStreamsLocked: Camera 1: Stream configuration E
10-21 11:07:07.567 I/HidlCamera3-Device( 1449): configureStreams Before configuration Stream[0] : [640 x 480], usage: 0x3
10-21 11:07:07.568 I/SehCamDevSession@5.0-impl( 1108): [CAMKPI] camera3->configure_streams : E
10-21 11:07:07.568 I/Unihal  ( 1108): CameraHalUnit.cpp: ConfigureStreams: 232: cameraId=1, GetIsAlreadyCreated=0
10-21 11:07:07.568 I/Unihal  ( 1108): ScenarioManager.cpp: FindScenarioInfo: 2072: Current shootingMode=0x0001000c(UNI_SHOOTING_MODE_3RD_PARTY_BYPASS), cameraId=1(UNI_FWK_CAMERA_ID_FRONT)
10-21 11:07:07.568 I/Unihal  ( 1108): ScenarioManager.cpp: CheckEnableCondition: 2222: Unihal is disabled. : isSamsungCamera=false, isFactoryTest=false, isGalaxyRaw = false, isAllowed3rdParty=true, foundScenario=false, 
isValidStreamConfiguration=false, isSamsungVdisEnabled=false, isTestPatternMode=false, shootingMode=UNI_SHOOTING_MODE_3RD_PARTY_BYPASS
10-21 11:07:07.568 I/Unihal  ( 1108): CameraHalUnit.cpp: ConfigureStreams: 260: Unihal is bypass mode in current scenario.
10-21 11:07:07.568 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1535 configure_streams() HalOp: Begin CONFIG: 0xb400007ac39e2730, logicalCameraId: 3, cameraId: 1
10-21 11:07:07.568 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1568 configure_streams()             stream_type  : 00000000, CAMERA3_STREAM_OUTPUT
10-21 11:07:07.568 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1575 configure_streams()             rotation     : 00000000, CAMERA3_STREAM_ROTATION_0
10-21 11:07:07.568 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1583 configure_streams()        physical_camera_id         : 
10-21 11:07:07.570 I/CHIUSECASE( 1108): [CONFIG ] chxextensionmodule.cpp:1187 SetHALOps() SetHALOps being set for CameraID:3
10-21 11:07:07.579 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:07.584 W/CHIUSECASE( 1108): [WARN   ] chifeature2graphmanager.cpp:345 LoadFeatureGraphSelectorOps() No graph selector library files found in the path /vendor/lib64/camera/components/feature2/oem
10-21 11:07:07.594 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:07.594 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:07.594 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:07.594 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:07.598 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:07.600 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:07.603 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:07.605 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:07.617 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:07.617 W/CHIUSECASE( 1108): [WARN   ] chxsession.cpp:154 Initialize() flags.flags.u.FASTAEC = 0 , isFastAECState = 0 (logicalCameraId 12)
10-21 11:07:07.630 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 948: StaticAEC algo create: camera open mask 32 
10-21 11:07:07.630 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 841: Given Camera role=0, camera id=5
10-21 11:07:07.630 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 958: CameraOpenIndicator : 1
10-21 11:07:07.630 I/QC_3A   ( 1108):  INFO: AEC: QcWrapperCommonFillSensorIdMap: 26: Already filled, cameraId(5) driverSensorId(13)
10-21 11:07:07.630 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 978: Internal camera id = 1
10-21 11:07:07.638 I/QC_3A   ( 1108):  INFO: AEC: QcAecLoadTuningParamsFromDAT: 73: /data/vendor/camera/QcAecWrapperTuned_Front.dat : No such file or directory
10-21 11:07:07.640 E/QC_3A   ( 1108): ERROR: AEC: QcAecWrapperInitData: 660: Motion Library loading error: dlopen failed: library "/vendor/lib64/camera/components/libMOTION.so" not found
10-21 11:07:07.640 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 1101: AEC Wrapper is created - InstanceCnt=1, algo=0xb400007b75031450, wrapper data=0xb400007b7505e690, curCameraID=1
10-21 11:07:07.641 I/QC_3A   ( 1108):  INFO: AEC: QcAecGetParamFillOutputPointers: 337: AECAlgoGetParamStartExposure - reqID: 0, cameraId: 1
10-21 11:07:07.651 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 602: StaticAWB algo create: camera open mask 32 
10-21 11:07:07.651 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 530: Given Camera role=0, camera id=5
10-21 11:07:07.651 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 677: CameraOpenIndicator : 1
10-21 11:07:07.651 I/QC_3A   ( 1108):  INFO: AWB: QcWrapperCommonFillSensorIdMap: 26: Already filled, cameraId(5) driverSensorId(13)
10-21 11:07:07.651 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 697: Internal camera id = 1
10-21 11:07:07.655 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 823: AWB Wrapper is created - InstanceCnt=1, algo=0xb400007b5507f6e0, wrapper data=0xb400007b7502e090, curCameraID 1
10-21 11:07:07.655 I/QC_3A   ( 1108):  INFO: AWB: QcAwbSetSingleParamToAlgo: 61: [AWB-WARMSTART] Previous CameraID: FRONT(1) Current CameraID: FRONT(1)
10-21 11:07:07.660 I/QC_3A   ( 1108):  INFO:  AF: CreateAFAlgorithm: 615: StaticAF algo create: camera open mask 32 
10-21 11:07:07.660 I/QC_3A   ( 1108):  INFO:  AF: CreateAFAlgorithm: 543: Given Camera role=0, camera id=5
10-21 11:07:07.660 I/QC_3A   ( 1108):  INFO:  AF: QcWrapperCommonFillSensorIdMap: 26: Already filled, cameraId(5) driverSensorId(13)
10-21 11:07:07.660 I/QC_3A   ( 1108):  INFO:  AF: CreateAFAlgorithm: 651: Internal camera id = 1
10-21 11:07:07.662 I/QC_3A   ( 1108):  INFO:  AF: CreateAFAlgorithm: 778: AEC Wrapper is created - InstanceCnt=1, algo=0xb400007b5505f110, wrapper data=0xb400007b75021c10, curCameraID=1
10-21 11:07:07.667 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1699 configure_streams()             stream_type  : 00000000, CAMERA3_STREAM_OUTPUT
10-21 11:07:07.667 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1706 configure_streams()             rotation     : 00000000, CAMERA3_STREAM_ROTATION_0
10-21 11:07:07.667 I/SehCamDevSession@5.0-impl( 1108): [CAMKPI] camera3->configure_streams : X
10-21 11:07:07.668 D/HidlCamera3-Device( 1449): configureStreams : stream[0] : format = 0x23(YUV_420_888), data_space = 146931712, color_space = -1 usage flag = 0x20003 max_buffers = 8, physical_camera_id = 
10-21 11:07:07.668 D/Camera3-Device( 1449): CameraPerf: Connect Streams E
10-21 11:07:07.668 I/Camera3-Status( 1449): addComponent: Adding new component 2 - streamId = 0, format = 0x23(YUV_420_888), width = 640, height = 480, option = 0x0, type = OUTPUT
10-21 11:07:07.670 D/Camera3-OutputStream( 1449): configureConsumerQueueLocked: Consumer wants 2 buffers, HAL wants 8
10-21 11:07:07.671 D/Camera3-Device( 1449): CameraPerf: Connect Streams X (2ms)
10-21 11:07:07.672 D/Camera3-Device( 1449): Set real time priority for request queue thread (tid 8259)
10-21 11:07:07.672 D/Camera3-Device( 1449): CameraPerf: configureStreamsLocked: Camera 1: Stream configuration X (106ms)
10-21 11:07:07.677 D/Camera3-Device( 1449): setStreamingRequestList: Enter: calling submitRequestsHelper: repeating = true
10-21 11:07:07.677 D/Camera3-Device( 1449): submitRequestsHelper: mInterfaceLock.lock()
10-21 11:07:07.677 I/Camera3-Device( 1449): Submit request type: 0x1, repeating(true), burst(false)
10-21 11:07:07.677 D/Camera3-Device( 1449): setRepeatingRequests: lastFrameNumber 0.
10-21 11:07:07.677 I/Camera3-Status( 1449): markComponent: Component 1 is now active - RequestThread
10-21 11:07:07.677 D/Camera3-Device( 1449): CameraPerf: PrepareHALRequests E
10-21 11:07:07.677 I/CameraService( 1449): startCameraStreamingOps: Start camera streaming ops, package name = ir.mouj, client UID = 10372
10-21 11:07:07.678 I/CameraServiceProxyWrapper( 1449): updateProxyDeviceState: notifyCameraState for Camera ID 1, newState 1, facing 1, clientName ir.mouj, apiLevel 2
10-21 11:07:07.678 I/Camera3-Status( 1449): markComponent: Component 2 is now active - streamId = 0, format = 0x23(YUV_420_888), width = 640, height = 480, option = 0x0, type = OUTPUT
10-21 11:07:07.678 I/Camera3-Status( 1449): markComponent: Component 0 is now active - InflightRequests
10-21 11:07:07.678 D/Camera3-Device( 1449): CameraPerf: PrepareHALRequests X (1ms)
10-21 11:07:07.678 D/Camera3-Device( 1449): CameraPerf: sendRequestsBatch E
10-21 11:07:07.678 I/CameraService_proxy( 1407): wmi.addRefreshRateRangeForPackage minFPS = 30.000002, maxFPS = 60.0, clientName = ir.mouj
10-21 11:07:07.678 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.679 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.679 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.679 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.679 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.679 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.679 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.679 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.680 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.680 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.680 I/SehCamDevSession@5.0-impl( 1108): [CAMKPI] camera3->process_capture_request : E
10-21 11:07:07.680 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.680 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.680 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.680 D/CameraAvailabilityListener( 2562): onCameraDeviceStateChanged: id=1, facing=1, state=CAMERA_STATE_ACTIVE, client=ir.mouj
10-21 11:07:07.680 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.681 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:07.682 D/Camera3-Device( 1449): submitRequestsHelper: mInterfaceLock.unlock()
10-21 11:07:07.682 I/lmkd    (  629): check finished camerakillboostmode
10-21 11:07:07.682 I/SehCamDevSession@5.0-impl( 1108): [CAMKPI] camera3->process_capture_request : X
10-21 11:07:07.682 D/Camera3-Device( 1449): CameraPerf: sendRequestsBatch X (4ms)
10-21 11:07:07.683 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.684 I/EDMNativeHelperService( 1407): isCameraEnabled
10-21 11:07:07.685 D/EDMNativeHelper( 1407): isCameraEnabled
10-21 11:07:07.685 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:07.686 D/EDMNativeHelper( 1407): checking for camera in EnterpriseDeviceManagerService
10-21 11:07:07.686 D/EnterpriseDeviceManagerService( 1407): isCameraEnabledNative
10-21 11:07:07.686 D/EnterpriseDeviceManagerService( 1407): checking for camera in restriction policy
10-21 11:07:07.686 D/RestrictionPolicy( 1407): isCameraEnabled ret(true) userId(0) cxtInfo.mCallerUid(10372) cxtInfo.mContainerId(0)
10-21 11:07:07.691 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:07.692 I/Camera2ClientBase( 1449): Creating CameraServiceWatchDog for disconnect with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:07.692 I/Camera2ClientBase( 1449): CameraServiceWatchDog::watchThread for disconnect with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:07.692 D/Camera2ClientBase( 1449): Camera 1: start to disconnect
10-21 11:07:07.692 D/Camera2ClientBase( 1449): Camera 1: serializationLock acquired
10-21 11:07:07.692 D/Camera2ClientBase( 1449): Camera 1: Shutting down
10-21 11:07:07.692 D/Camera2ClientBase( 1449): Camera 1: start to cacheDump
10-21 11:07:07.692 E/camera_metadata( 1449): validate_camera_metadata_structure: metadata is null!
10-21 11:07:07.692 E/Camera2-Metadata( 1449): acquire: Failed to validate metadata structure 0x0
10-21 11:07:07.694 E/Camera2-FrameProcessorBase( 1449): removeListener: 
10-21 11:07:07.696 D/Camera3-Device( 1449): flush: mInterfaceLock.lock()
10-21 11:07:07.696 I/Camera3-Device( 1449): Creating CameraServiceWatchDog for flush with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:07.696 I/Camera3-Device( 1449): CameraServiceWatchDog::watchThread for flush with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:07.696 D/HidlCamera3-Device( 1449): CameraPerf: flush E
10-21 11:07:07.696 I/Unihal  ( 1108): CameraHalUnit.cpp: Flush: 545: HAL flush - Start
10-21 11:07:07.700 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=3, errorStreamId=0, frameNumber=3
10-21 11:07:07.700 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:07.701 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 3 , due to buffer error.
10-21 11:07:07.701 I/Camera3-Status( 1449): markComponent: Component 1 is now idle - RequestThread
10-21 11:07:07.733 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=0
10-21 11:07:07.733 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:07.733 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=0
10-21 11:07:07.733 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:07.734 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=1
10-21 11:07:07.734 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:07.735 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=1
10-21 11:07:07.735 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:07.735 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 1 , due to buffer error.
10-21 11:07:07.735 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=2
10-21 11:07:07.735 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:07.736 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=2
10-21 11:07:07.736 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:07.736 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 2 , due to buffer error.
10-21 11:07:07.736 I/Camera3-Status( 1449): markComponent: Component 2 is now idle - streamId = 0, format = 0x23(YUV_420_888), width = 640, height = 480, option = 0x0, type = OUTPUT
10-21 11:07:07.736 I/Camera3-IOStreamBase( 1449): FpsStats: stream 0, requested=4, received=4, valid=0, invalid=4
10-21 11:07:07.737 I/Camera3-Status( 1449): markComponent: Component 0 is now idle - InflightRequests
10-21 11:07:07.737 I/CameraService( 1449): finishCameraStreamingOps: finish camera streaming ops, package name = ir.mouj, client UID = 10372
10-21 11:07:07.737 I/Unihal  ( 1108): CameraHalUnit.cpp: Flush: 549: HAL flush - End
10-21 11:07:07.737 D/HidlCamera3-Device( 1449): CameraPerf: flush X (41ms)
10-21 11:07:07.737 D/Camera3-Device( 1449): waitUntilDrainedLocked: Camera 1: Waiting until idle (5000000000ns)
10-21 11:07:07.737 D/Camera3-Device( 1449): waitUntilDrained: mInterfaceLock.unlock()
10-21 11:07:07.737 I/Camera3-Device( 1449): disconnectImpl: E
10-21 11:07:07.737 I/CameraLatencyHistogram( 1449): ProcessCaptureRequest latency histogram (4) samples:
10-21 11:07:07.737 I/CameraLatencyHistogram( 1449):        20     40     60     80    100    120    140    160    180    inf (max ms)
10-21 11:07:07.737 I/CameraLatencyHistogram( 1449):      100.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00 (%)
10-21 11:07:07.737 I/CameraServiceProxyWrapper( 1449): updateProxyDeviceState: notifyCameraState for Camera ID 1, newState 2, facing 1, clientName ir.mouj, apiLevel 2
10-21 11:07:07.737 I/CameraService_proxy( 1407): wmi.removeRefreshRateRangeForPackage clientName = ir.mouj
10-21 11:07:07.737 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.737 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.737 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.737 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.738 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.738 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.738 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.738 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.738 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.738 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.738 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.738 D/CameraAvailabilityListener( 2562): onCameraDeviceStateChanged: id=1, facing=1, state=CAMERA_STATE_IDLE, client=ir.mouj
10-21 11:07:07.738 I/lmkd    (  629): check finished camerakillboostmode
10-21 11:07:07.738 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.738 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.738 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.739 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.739 I/Camera3-Device( 1449): CameraServiceWatchDog::watchThread for disconnectImpl with cycles=100, cycleLength=100ms, timer=10000ms
10-21 11:07:07.740 D/HidlCamera3-Device( 1449): CameraPerf: close E
10-21 11:07:07.740 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_close_camera_hardware: 479: E
10-21 11:07:07.741 I/Unihal  ( 1108): CameraHalManager.cpp: CloseCamera: 275: HAL close - Start
10-21 11:07:07.743 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1319 close() after process camera close
10-21 11:07:07.743 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1331 close() Close: overrideCameraClose is 47 , overrideCameraOpen is 0 
10-21 11:07:07.819 I/QC_3A   ( 1108):  INFO: AEC: AECDestroy: 457: Received Camera close mask 0x2f
10-21 11:07:07.819 I/QC_3A   ( 1108):  INFO: AEC: AECDestroy: 465: Received CameraID: 5  Internal CameraID : 1
10-21 11:07:07.819 I/QC_3A   ( 1108):  INFO: AEC: AECDestroy: 487: isCameraClose: 1
10-21 11:07:07.821 I/QC_3A   ( 1108):  INFO: AWB: AWBDestroy: 333: Received Camera close mask 0x2f
10-21 11:07:07.821 I/QC_3A   ( 1108):  INFO: AWB: AWBDestroy: 341: Received CameraID: 5  Internal CameraID : 1
10-21 11:07:07.822 I/QC_3A   ( 1108):  INFO: AWB: AWBDestroy: 359: isCameraClose: 1
10-21 11:07:07.824 I/QC_3A   ( 1108):  INFO:  AF: AFDestroy: 258: Received Camera close mask 0x2f
10-21 11:07:07.824 I/QC_3A   ( 1108):  INFO:  AF: AFDestroy: 266: Received CameraID: 5  Internal CameraID : 1
10-21 11:07:07.824 I/QC_3A   ( 1108):  INFO:  AF: AFDestroy: 276: isCameraClose: 1
10-21 11:07:07.855 I/CameraProviderManager( 1449): Camera device device@3.5/legacy/1 torch status is now AVAILABLE_OFF
10-21 11:07:07.856 I/CameraService( 1449): onTorchStatusChangedLocked: Torch status changed for cameraId=1, newStatus=1
10-21 11:07:07.856 E/CameraService( 1449): onTorchStatusChangedLocked: cannot get torch status of camera 1: No such file or directory (-2)
10-21 11:07:07.856 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1335 close() Close done on cameraId 3
10-21 11:07:07.856 I/Unihal  ( 1108): CameraHalManager.cpp: CloseCamera: 279: HAL close - End
10-21 11:07:07.856 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_close_camera_hardware: 493: X (0)
10-21 11:07:07.856 D/HidlCamera3-Device( 1449): CameraPerf: close X (116ms)
10-21 11:07:07.856 D/Camera3-OutputStream( 1449): disconnectLocked: disconnecting stream 0 from native window
10-21 11:07:07.857 I/CameraLatencyHistogram( 1449): Stream 0 dequeueBuffer latency histogram (4) samples:
10-21 11:07:07.857 I/CameraLatencyHistogram( 1449):         5     10     15     20     25     30     35     40     45    inf (max ms)
10-21 11:07:07.857 I/CameraLatencyHistogram( 1449):      75.00   25.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00 (%)
10-21 11:07:07.858 I/Camera3-Device( 1449): disconnectImpl: X
10-21 11:07:07.858 I/CameraServiceProxyWrapper( 1449): updateProxyDeviceState: notifyCameraState for Camera ID 1, newState 3, facing 1, clientName ir.mouj, apiLevel 2
10-21 11:07:07.858 I/Camera3-Device( 1449): setDeviceInjector
10-21 11:07:07.858 D/CameraService( 1449): BasicClient::disconnect E
10-21 11:07:07.859 W/CameraService_proxy( 1407): Unknown extension type: -1
10-21 11:07:07.859 D/BatteryExternalStatsWorker( 1407): update stats : camera-off (64)
10-21 11:07:07.860 I/CameraService( 1449): finishCameraOps: Finish camera ops, package name = ir.mouj, client UID = 10372
10-21 11:07:07.860 I/CameraService( 1449): decreaseCamConnRef: ref=0
10-21 11:07:07.861 I/CameraService( 1449): decreaseCamConnRef: service.camera.running set to 0
10-21 11:07:07.861 I/CameraManagerGlobal( 1407): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:07.861 I/CameraManagerGlobal( 1407): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:07.861 I/CameraManagerGlobal( 5245): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:07.861 I/CameraManagerGlobal(14831): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:07.862 I/CameraManagerGlobal(10793): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:07.862 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.862 I/HBD     ( 5245): k Camera is available, camId = 1 
10-21 11:07:07.862 I/HBD     ( 5245): k All camera is available, so, ExtractText will be enabled 
10-21 11:07:07.862 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.862 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.862 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.862 I/CameraManagerGlobal(18970): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:07.862 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.862 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.862 I/CameraManagerGlobal( 6629): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:07.862 I/CameraManagerGlobal( 4699): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:07.862 I/CameraManagerGlobal( 4699): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:07.862 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.862 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.862 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.862 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.862 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.863 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.863 I/CameraService_worker( 1407): DeviceInjector, onSemCameraDeviceRawStatus 1 1
10-21 11:07:07.862 I/IC_Service[1.2.93]( 6629): onCameraAvailable(1)
10-21 11:07:07.863 I/RequestInjectorService( 1407): Camera is closed. cameraId(1), state(█│)
10-21 11:07:07.864 I/CameraManagerGlobal( 8100): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:07.864 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.864 I/lmkd    (  629): check finished camerakillboostmode
10-21 11:07:07.865 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.865 I/CameraFlashlight( 1449): deviceClosed: device 1 is closed
10-21 11:07:07.865 I/CameraService( 1449): disconnect: Disconnected client for camera 1 for PID 8100
10-21 11:07:07.865 D/cameraserver( 1449): FGS Logger Transaction failed
10-21 11:07:07.865 D/cameraserver( 1449): -129
10-21 11:07:07.865 D/CameraService( 1449): BasicClient::disconnect X
10-21 11:07:07.866 W/ir.mouj ( 8100): Long monitor contention with owner VideoCaptureCamera2_CameraThread (8254) at void android.hardware.camera2.impl.CameraDeviceImpl.close()(CameraDeviceImpl.java:1492) waiters=0 in void 
android.hardware.camera2.impl.CameraDeviceImpl.onDeviceError(int, android.hardware.camera2.impl.CaptureResultExtras) for 164ms
10-21 11:07:07.866 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.866 D/CameraAvailabilityListener( 2562): onCameraDeviceStateChanged: id=1, facing=1, state=CAMERA_STATE_CLOSED, client=ir.mouj
10-21 11:07:07.873 I/VSET/ObserveCameraStateService( 6368): onStartCommand : unihal 3.01
10-21 11:07:07.873 I/VSET/ObserveCameraStateService( 6368): initAppRepository is created already
10-21 11:07:07.874 I/VSET/ObserveCameraStateService( 6368): onStartCommand: true
10-21 11:07:07.877 I/CameraService_proxy( 1407): Notify nfc service : camera open was(true) -> now(false) = polling(true)
10-21 11:07:07.877 D/PackageManager( 1407): setEnabledSetting : userId = 0 packageName = com.samsung.android.vtcamerasettings cmp = com.samsung.android.vtcamerasettings.settings.SettingsActivity newState = 1 callingPackage = 
com.samsung.android.vtcamerasettings
10-21 11:07:07.878 D/ApplicationPolicy( 1407): getApplicationStateEnabled : pkg = com.samsung.android.vtcamerasettings userId : 0
10-21 11:07:07.879 D/ApplicationPolicy( 1407): getApplicationComponentState : pkg = com.samsung.android.vtcamerasettings userId : 0
10-21 11:07:07.879 E/ScreenDecorations( 2562): CutoutView not initialized hideCameraProtection
10-21 11:07:07.880 D/NfcService( 2807): setReaderMode: uid=1000, packageName: com.samsung.android.cameraxservice, flags: 0
10-21 11:07:07.883 I/VSET/ObserveCameraStateService( 6368): onStartCommand: update SALogging status
10-21 11:07:07.883 I/VSET/ObserveCameraStateService( 6368): processDeviceInjectorIntent: not supported device injector
10-21 11:07:07.884 I/VSET/ObserveCameraStateService( 6368): updateAppInfoRepository: E 
10-21 11:07:07.884 I/VSET/ObserveCameraStateService( 6368): initAppRepository is created already
10-21 11:07:07.886 I/VSET/ObserveCameraStateService( 6368): requestStopService
10-21 11:07:07.953 I/CameraService( 1449): CameraService::connect call (PID 8100 "ir.mouj", camera ID 1) and Camera API version 2
10-21 11:07:07.954 I/CameraService( 1449): isUidActiveLocked E: uid 10372, callingPackage ir.mouj, isRegistered true
10-21 11:07:07.954 I/CameraService( 1449): isUidActiveLocked X: uid 10372, callingPackage ir.mouj, isActive true.
10-21 11:07:07.954 I/EDMNativeHelperService( 1407): isCameraEnabled
10-21 11:07:07.955 D/EDMNativeHelper( 1407): isCameraEnabled
10-21 11:07:07.955 D/EDMNativeHelper( 1407): checking for camera in EnterpriseDeviceManagerService
10-21 11:07:07.955 D/EnterpriseDeviceManagerService( 1407): isCameraEnabledNative
10-21 11:07:07.955 D/EnterpriseDeviceManagerService( 1407): checking for camera in restriction policy
10-21 11:07:07.955 D/RestrictionPolicy( 1407): isCameraEnabled ret(true) userId(0) cxtInfo.mCallerUid(10372) cxtInfo.mContainerId(0)
10-21 11:07:07.956 I/CameraService( 1449): CameraService::validateClientPermissionsLocked is ok : calling pid 8100, calling uid 10372, client ir.mouj , cameraservice pid=1449, device user 0, currently allowed device users: 0
10-21 11:07:07.956 I/CameraService( 1449): CameraService::handleEvictionsLocked
10-21 11:07:07.956 I/CameraService( 1449): wouldEvictLocked: [incoming client] owner = 8100, priority-score=0, cost=100, returnIncompatibleClients=false
10-21 11:07:07.956 I/CameraService( 1449): wouldEvictLocked: [cost info] current cost=0, adding cost=100, total cost=100, max cost=100
10-21 11:07:07.956 I/CameraService( 1449): wouldEvictLocked: [highestPriority] owner=8100, score=0
10-21 11:07:07.956 I/CameraFlashlight( 1449): prepareDeviceOpen: prepare for device open(cameraId=1)
10-21 11:07:07.956 I/Camera2ClientBase( 1449): Camera 1: Opened. Client: ir.mouj (PID 8100, UID 10372)
10-21 11:07:07.956 I/CameraDeviceClient( 1449): CameraDeviceClient 1: Opened
10-21 11:07:07.956 I/CameraService( 1449): isNoSALoggingPackage: ir.mouj is a third party package.
10-21 11:07:07.956 I/CameraService( 1449): makeClient: Camera2 API, override to portrait 0
10-21 11:07:07.957 I/CameraService( 1449): service.camera.client set to ir.mouj
10-21 11:07:07.957 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.957 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.957 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.957 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.957 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.957 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.958 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.958 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.958 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.958 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.958 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.958 I/RequestInjectorService( 1407): Camera is opening. Start VT Camera Setting. cameraId(1), displayId(█░)
10-21 11:07:07.958 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.959 I/Camera2ClientBase( 1449): initializeImpl: Initializing client for camera 1
10-21 11:07:07.959 D/ijt/Camera3-RequestInjector( 1449): RequestInjector[1] Mapper created
10-21 11:07:07.959 I/Camera3-Device( 1449): Camera3Device: Created device for camera 1
10-21 11:07:07.959 D/HidlCamera3-Device( 1449): CameraPerf: initialize E
10-21 11:07:07.959 D/HidlCamera3-Device( 1449): initialize: mInterfaceLock.lock()
10-21 11:07:07.959 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.959 I/CameraProviderManager( 1449): openHidlSession, using trampoline for v5.0
10-21 11:07:07.959 D/CameraProviderManager( 1449): CameraPerf: openHidlSession E
10-21 11:07:07.959 I/SehCamDev@5.0-impl( 1108): [CAMKPI] camera3->open : E
10-21 11:07:07.959 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_open_camera_hardware: 550: E cameraName: 1
10-21 11:07:07.959 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.959 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_open_camera_hardware: 552: UNIHAL_VERSION = "2.15"
10-21 11:07:07.959 I/Unihal  ( 1108): CameraDevice.cpp: OpenCameraHardware_v3: 401: name : 1 camera id : 1
10-21 11:07:07.959 I/CameraProviderManager( 1449): Camera device device@3.5/legacy/1 torch status is now NOT_AVAILABLE
10-21 11:07:07.959 I/CameraService( 1449): onTorchStatusChangedLocked: Torch status changed for cameraId=1, newStatus=0
10-21 11:07:07.959 E/CameraService( 1449): onTorchStatusChangedLocked: cannot get torch status of camera 1: No such file or directory (-2)
10-21 11:07:07.960 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.960 I/VSET/ObserveCameraStateService( 6368): onStartCommand : unihal 3.01
10-21 11:07:07.960 I/VSET/ObserveCameraStateService( 6368): initAppRepository is created already
10-21 11:07:07.960 I/VSET/ObserveCameraStateService( 6368): onStartCommand: true
10-21 11:07:07.960 W/CameraService_proxy( 1407): Unknown extension type: -1
10-21 11:07:07.962 D/PackageManager( 1407): setEnabledSetting : userId = 0 packageName = com.samsung.android.vtcamerasettings cmp = com.samsung.android.vtcamerasettings.settings.SettingsActivity newState = 1 callingPackage = 
com.samsung.android.vtcamerasettings
10-21 11:07:07.962 D/ApplicationPolicy( 1407): getApplicationStateEnabled : pkg = com.samsung.android.vtcamerasettings userId : 0
10-21 11:07:07.963 D/ApplicationPolicy( 1407): getApplicationComponentState : pkg = com.samsung.android.vtcamerasettings userId : 0
10-21 11:07:07.965 I/VSET/ObserveCameraStateService( 6368): onStartCommand: update SALogging status
10-21 11:07:07.965 I/VSET/ObserveCameraStateService( 6368): processDeviceInjectorIntent: not supported device injector
10-21 11:07:07.966 I/VSET/ObserveCameraStateService( 6368): updateAppInfoRepository: E 
10-21 11:07:07.966 I/VSET/ObserveCameraStateService( 6368): initAppRepository is created already
10-21 11:07:07.969 I/Unihal  ( 1108): ParameterManager.cpp: SetCameraCharacteristics: 116: Registered camera characteristics successfully. : cameraId=1, characteristics=0xb400007c150dd560
10-21 11:07:07.969 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_open_camera_hardware: 578: X (0)
10-21 11:07:07.969 I/SehCamDev@5.0-impl( 1108): [CAMKPI] camera3->open : X
10-21 11:07:07.970 I/VSET/ObserveCameraStateService( 6368): requestStopService
10-21 11:07:07.975 D/CameraProviderManager( 1449): CameraPerf: openHidlSession X (15ms)
10-21 11:07:07.978 D/HidlCamera3-Device( 1449): CameraPerf: initialize X (19ms)
10-21 11:07:07.978 D/Camera3-Device( 1449): CameraPerf: initializeCommonLocked: E
10-21 11:07:07.978 I/Camera3-Status( 1449): addComponent: Adding new component 0 - InflightRequests
10-21 11:07:07.978 I/Camera3-Status( 1449): addComponent: Adding new component 1 - RequestThread
10-21 11:07:07.979 D/Camera3-Device( 1449): initializeCommonLocked mTimestampOffset = 1155765056712737ns.
10-21 11:07:07.979 D/Camera3-Device( 1449): CameraPerf: initializeCommonLocked: X (0ms)
10-21 11:07:07.979 I/CameraService( 1449): startCameraOps: Start camera ops, package name = ir.mouj, client UID = 10372
10-21 11:07:07.982 I/CameraService( 1449): increaseCamConnRef: ref=1
10-21 11:07:07.983 I/CameraService( 1449): increaseCamConnRef: service.camera.running set to 1
10-21 11:07:07.983 I/CameraManagerGlobal( 4699): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.983 I/CameraManagerGlobal(10793): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.983 I/CameraManagerGlobal(14831): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.983 I/CameraManagerGlobal( 4699): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.983 I/CameraManagerGlobal( 5245): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.984 I/CameraManagerGlobal( 6629): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.984 I/HBD     ( 5245): k Camera is used by another app, camId = 1 
10-21 11:07:07.984 I/IC_Service[1.2.93]( 6629): onCameraUnavailable(1)
10-21 11:07:07.984 I/CameraManagerGlobal( 8100): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.984 E/Camera2-FrameProcessorBase( 1449): FrameProcessorBase: created
10-21 11:07:07.984 I/CameraService_worker( 1407): DeviceInjector, onSemCameraDeviceRawStatus 1 -2
10-21 11:07:07.984 I/CameraManagerGlobal(18970): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.984 I/CameraManagerGlobal( 1407): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.984 E/Camera2-FrameProcessorBase( 1449): registerListener: Registering listener for frame id range 0 - 2147483647
10-21 11:07:07.985 I/CameraService( 1449): connectHelper: overrideCameraMuteMode = false, isCameraPrivacyEnabled = false
10-21 11:07:07.985 I/Camera3-Device( 1449): setCameraMute, enabled = false, supported = true
10-21 11:07:07.985 I/CameraService( 1449): CameraService::finishConnectLocked E
10-21 11:07:07.985 I/CameraService( 1449): wouldEvictLocked: [incoming client] owner = 8100, priority-score=0, cost=100, returnIncompatibleClients=false
10-21 11:07:07.985 I/CameraService( 1449): wouldEvictLocked: [cost info] current cost=0, adding cost=100, total cost=100, max cost=100
10-21 11:07:07.985 I/CameraService( 1449): wouldEvictLocked: [highestPriority] owner=8100, score=0
10-21 11:07:07.985 I/CameraManagerGlobal( 1407): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:07.985 I/CameraService( 1449): addAndEvict: push the client(owner 8100, priorityScore 0, state 2) to mClients
10-21 11:07:07.985 D/BatteryExternalStatsWorker( 1407): update stats : camera-on (64)
10-21 11:07:07.985 I/CameraService( 1449): CameraService::finishConnectLocked X
10-21 11:07:07.986 I/CameraDeviceClient( 1449): notifyAppPackageName
10-21 11:07:07.986 D/HidlCamera3-Device( 1449): CameraPerf: setParameters E
10-21 11:07:07.986 D/HidlCamera3-Device( 1449): CameraPerf: setParameters X (0ms)
10-21 11:07:07.986 I/CameraService( 1449): Notified package name to HAL.
10-21 11:07:07.986 I/CameraService( 1449): connectHelper: Skip Request Injector ExtraRequests to new client(ir.mouj)
10-21 11:07:07.986 I/CameraServiceProxyWrapper( 1449): updateProxyDeviceState: notifyCameraState for Camera ID 1, newState 0, facing 1, clientName ir.mouj, apiLevel 2
10-21 11:07:07.986 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.986 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.987 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.987 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.987 I/AudioManager( 1407): setParameters keyValuePairs = cameraFacing=front
10-21 11:07:07.987 D/CameraAvailabilityListener( 2562): onCameraDeviceStateChanged: id=1, facing=1, state=CAMERA_STATE_OPEN, client=ir.mouj
10-21 11:07:07.987 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.987 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.987 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.987 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:07.987 I/CameraService( 1449): isNoSALoggingPackage: ir.mouj is a third party package.
10-21 11:07:07.987 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.987 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.987 D/cameraserver( 1449): FGS Logger Transaction failed
10-21 11:07:07.987 D/cameraserver( 1449): -129
10-21 11:07:07.988 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.988 D/audio_hw_primary( 1075): adev_set_parameters: enter: cameraFacing=front
10-21 11:07:07.988 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.988 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.988 I/lmkd    (  629): check CAMERA OPEN but time within 500ms, skip to active
10-21 11:07:07.988 I/lmkd    (  629): check finished camerakillboostmode
10-21 11:07:07.988 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.989 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:07.990 I/CameraService_proxy( 1407): Notify nfc service : camera open was(false) -> now(true) = polling(false)
10-21 11:07:07.991 D/NfcService( 2807): setReaderMode: uid=1000, packageName: com.samsung.android.cameraxservice, flags: 4096
10-21 11:07:07.992 E/cr_VideoCapture( 8100): CameraDevice.StateCallback onOpened
10-21 11:07:07.993 I/WindowManager( 2562): WindowManagerGlobal#addView, ty=2024, view=com.android.systemui.RegionInterceptingFrameLayout{122cf47 V.E...... ......I. 0,0-0,0}, caller=android.view.WindowManagerImpl.addView:150 
com.android.systemui.ScreenDecorations.setupDecorations:804 com.android.systemui.ScreenDecorations$1.onApplyCameraProtection:54 
10-21 11:07:07.994 D/HidlCamera3-Device( 1449): CameraPerf: constructDefaultRequestSettings templateId: 1 E
10-21 11:07:07.996 D/HidlCamera3-Device( 1449): CameraPerf: constructDefaultRequestSettings X (1ms)
10-21 11:07:08.014 D/Camera3-Device( 1449): waitUntilDrained: mInterfaceLock.unlock()
10-21 11:07:08.016 D/CameraDeviceClient( 1449): createStream E
10-21 11:07:08.016 D/SessionConfigUtils( 1449): createSurfaceFromGbp E: logicalCameraId=1, isStreamInfoValid=0, useCase=0, option=0x0, mirrorMode=0
10-21 11:07:08.018 D/Camera3-Device( 1449): createStream: mInterfaceLock.lock()
10-21 11:07:08.018 D/Camera3-Device( 1449): createStream: Camera 1: Creating new stream 0: 640 x 480, format 0x23(YUV_420_888), dataspace 146931712 rotation 0 consumer usage 0, isShared 0, physicalCameraId , isMultiResolution 
0 dynamicRangeProfile 0x1, streamUseCase 0, option 0x0, timestampBase 0, mirrorMode 0, colorSpace -1, useReadoutTimestamp 0
10-21 11:07:08.022 D/Camera3-Device( 1449): createStream: mInterfaceLock.unlock()
10-21 11:07:08.022 D/CameraDeviceClient( 1449): createStream: Camera 1: Successfully created a new stream ID 0 for output surface (640 x 480) with format 0x23.
10-21 11:07:08.022 D/Camera3-Device( 1449): setStreamTransform: mInterfaceLock.lock()
10-21 11:07:08.022 D/CameraDeviceClient( 1449): createStream X
10-21 11:07:08.022 D/Camera3-Device( 1449): filterParamsAndConfigureLocked : operatingMode=0
10-21 11:07:08.025 D/Camera3-Device( 1449): CameraPerf: configureStreamsLocked: Camera 1: Stream configuration E
10-21 11:07:08.025 I/HidlCamera3-Device( 1449): configureStreams Before configuration Stream[0] : [640 x 480], usage: 0x3
10-21 11:07:08.026 I/SehCamDevSession@5.0-impl( 1108): [CAMKPI] camera3->configure_streams : E
10-21 11:07:08.026 I/Unihal  ( 1108): CameraHalUnit.cpp: ConfigureStreams: 232: cameraId=1, GetIsAlreadyCreated=0
10-21 11:07:08.026 I/Unihal  ( 1108): ScenarioManager.cpp: FindScenarioInfo: 2072: Current shootingMode=0x0001000c(UNI_SHOOTING_MODE_3RD_PARTY_BYPASS), cameraId=1(UNI_FWK_CAMERA_ID_FRONT)
10-21 11:07:08.026 I/Unihal  ( 1108): ScenarioManager.cpp: CheckEnableCondition: 2222: Unihal is disabled. : isSamsungCamera=false, isFactoryTest=false, isGalaxyRaw = false, isAllowed3rdParty=true, foundScenario=false, 
isValidStreamConfiguration=false, isSamsungVdisEnabled=false, isTestPatternMode=false, shootingMode=UNI_SHOOTING_MODE_3RD_PARTY_BYPASS
10-21 11:07:08.026 I/Unihal  ( 1108): CameraHalUnit.cpp: ConfigureStreams: 260: Unihal is bypass mode in current scenario.
10-21 11:07:08.026 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1535 configure_streams() HalOp: Begin CONFIG: 0xb400007ac39e2730, logicalCameraId: 3, cameraId: 1
10-21 11:07:08.026 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1568 configure_streams()             stream_type  : 00000000, CAMERA3_STREAM_OUTPUT
10-21 11:07:08.026 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1575 configure_streams()             rotation     : 00000000, CAMERA3_STREAM_ROTATION_0
10-21 11:07:08.026 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1583 configure_streams()        physical_camera_id         : 
10-21 11:07:08.026 I/CHIUSECASE( 1108): [CONFIG ] chxextensionmodule.cpp:1187 SetHALOps() SetHALOps being set for CameraID:3
10-21 11:07:08.030 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:08.039 W/CHIUSECASE( 1108): [WARN   ] chifeature2graphmanager.cpp:345 LoadFeatureGraphSelectorOps() No graph selector library files found in the path /vendor/lib64/camera/components/feature2/oem
10-21 11:07:08.048 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:08.049 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:08.049 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:08.049 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:08.054 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:08.057 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:08.060 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:08.062 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:08.076 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:08.076 W/CHIUSECASE( 1108): [WARN   ] chxsession.cpp:154 Initialize() flags.flags.u.FASTAEC = 0 , isFastAECState = 0 (logicalCameraId 12)
10-21 11:07:08.092 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 948: StaticAEC algo create: camera open mask 32 
10-21 11:07:08.092 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 841: Given Camera role=0, camera id=5
10-21 11:07:08.094 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 958: CameraOpenIndicator : 1
10-21 11:07:08.094 I/QC_3A   ( 1108):  INFO: AEC: QcWrapperCommonFillSensorIdMap: 26: Already filled, cameraId(5) driverSensorId(13)
10-21 11:07:08.094 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 978: Internal camera id = 1
10-21 11:07:08.100 I/QC_3A   ( 1108):  INFO: AEC: QcAecLoadTuningParamsFromDAT: 73: /data/vendor/camera/QcAecWrapperTuned_Front.dat : No such file or directory
10-21 11:07:08.100 E/QC_3A   ( 1108): ERROR: AEC: QcAecWrapperInitData: 660: Motion Library loading error: dlopen failed: library "/vendor/lib64/camera/components/libMOTION.so" not found
10-21 11:07:08.100 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 1101: AEC Wrapper is created - InstanceCnt=1, algo=0xb400007b7508bbd0, wrapper data=0xb400007b7504ee50, curCameraID=1
10-21 11:07:08.101 I/QC_3A   ( 1108):  INFO: AEC: QcAecGetParamFillOutputPointers: 337: AECAlgoGetParamStartExposure - reqID: 0, cameraId: 1
10-21 11:07:08.109 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 602: StaticAWB algo create: camera open mask 32 
10-21 11:07:08.109 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 530: Given Camera role=0, camera id=5
10-21 11:07:08.109 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 677: CameraOpenIndicator : 1
10-21 11:07:08.109 I/QC_3A   ( 1108):  INFO: AWB: QcWrapperCommonFillSensorIdMap: 26: Already filled, cameraId(5) driverSensorId(13)
10-21 11:07:08.109 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 697: Internal camera id = 1
10-21 11:07:08.113 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 823: AWB Wrapper is created - InstanceCnt=1, algo=0xb400007b5508fb80, wrapper data=0xb400007b74ffae50, curCameraID 1
10-21 11:07:08.113 I/QC_3A   ( 1108):  INFO: AWB: QcAwbSetSingleParamToAlgo: 61: [AWB-WARMSTART] Previous CameraID: FRONT(1) Current CameraID: FRONT(1)
10-21 11:07:08.124 I/QC_3A   ( 1108):  INFO:  AF: CreateAFAlgorithm: 615: StaticAF algo create: camera open mask 32 
10-21 11:07:08.124 I/QC_3A   ( 1108):  INFO:  AF: CreateAFAlgorithm: 543: Given Camera role=0, camera id=5
10-21 11:07:08.124 I/QC_3A   ( 1108):  INFO:  AF: QcWrapperCommonFillSensorIdMap: 26: Already filled, cameraId(5) driverSensorId(13)
10-21 11:07:08.124 I/QC_3A   ( 1108):  INFO:  AF: CreateAFAlgorithm: 651: Internal camera id = 1
10-21 11:07:08.127 I/QC_3A   ( 1108):  INFO:  AF: CreateAFAlgorithm: 778: AEC Wrapper is created - InstanceCnt=1, algo=0xb400007b55074ab0, wrapper data=0xb400007b75007bd0, curCameraID=1
10-21 11:07:08.137 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1699 configure_streams()             stream_type  : 00000000, CAMERA3_STREAM_OUTPUT
10-21 11:07:08.137 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1706 configure_streams()             rotation     : 00000000, CAMERA3_STREAM_ROTATION_0
10-21 11:07:08.137 I/SehCamDevSession@5.0-impl( 1108): [CAMKPI] camera3->configure_streams : X
10-21 11:07:08.138 D/HidlCamera3-Device( 1449): configureStreams : stream[0] : format = 0x23(YUV_420_888), data_space = 146931712, color_space = -1 usage flag = 0x20003 max_buffers = 8, physical_camera_id = 
10-21 11:07:08.138 D/Camera3-Device( 1449): CameraPerf: Connect Streams E
10-21 11:07:08.138 I/Camera3-Status( 1449): addComponent: Adding new component 2 - streamId = 0, format = 0x23(YUV_420_888), width = 640, height = 480, option = 0x0, type = OUTPUT
10-21 11:07:08.140 D/Camera3-OutputStream( 1449): configureConsumerQueueLocked: Consumer wants 2 buffers, HAL wants 8
10-21 11:07:08.147 D/Camera3-Device( 1449): CameraPerf: Connect Streams X (9ms)
10-21 11:07:08.148 D/Camera3-Device( 1449): Set real time priority for request queue thread (tid 8326)
10-21 11:07:08.148 D/Camera3-Device( 1449): CameraPerf: configureStreamsLocked: Camera 1: Stream configuration X (123ms)
10-21 11:07:08.150 D/Camera3-Device( 1449): setStreamingRequestList: Enter: calling submitRequestsHelper: repeating = true
10-21 11:07:08.150 D/Camera3-Device( 1449): submitRequestsHelper: mInterfaceLock.lock()
10-21 11:07:08.150 I/EDMNativeHelperService( 1407): isCameraEnabled
10-21 11:07:08.150 D/EDMNativeHelper( 1407): isCameraEnabled
10-21 11:07:08.151 I/Camera3-Device( 1449): Submit request type: 0x1, repeating(true), burst(false)
10-21 11:07:08.151 D/Camera3-Device( 1449): setRepeatingRequests: lastFrameNumber 0.
10-21 11:07:08.151 I/Camera3-Status( 1449): markComponent: Component 1 is now active - RequestThread
10-21 11:07:08.152 D/Camera3-Device( 1449): CameraPerf: PrepareHALRequests E
10-21 11:07:08.152 I/CameraService( 1449): startCameraStreamingOps: Start camera streaming ops, package name = ir.mouj, client UID = 10372
10-21 11:07:08.152 D/EDMNativeHelper( 1407): checking for camera in EnterpriseDeviceManagerService
10-21 11:07:08.152 D/EnterpriseDeviceManagerService( 1407): isCameraEnabledNative
10-21 11:07:08.152 D/EnterpriseDeviceManagerService( 1407): checking for camera in restriction policy
10-21 11:07:08.153 D/RestrictionPolicy( 1407): isCameraEnabled ret(true) userId(0) cxtInfo.mCallerUid(10372) cxtInfo.mContainerId(0)
10-21 11:07:08.153 D/Camera3-Device( 1449): submitRequestsHelper: mInterfaceLock.unlock()
10-21 11:07:08.153 I/Camera3-Status( 1449): markComponent: Component 2 is now active - streamId = 0, format = 0x23(YUV_420_888), width = 640, height = 480, option = 0x0, type = OUTPUT
10-21 11:07:08.153 I/Camera3-Status( 1449): markComponent: Component 0 is now active - InflightRequests
10-21 11:07:08.153 D/Camera3-Device( 1449): CameraPerf: PrepareHALRequests X (1ms)
10-21 11:07:08.153 D/Camera3-Device( 1449): CameraPerf: sendRequestsBatch E
10-21 11:07:08.154 I/SehCamDevSession@5.0-impl( 1108): [CAMKPI] camera3->process_capture_request : E
10-21 11:07:08.154 I/CameraServiceProxyWrapper( 1449): updateProxyDeviceState: notifyCameraState for Camera ID 1, newState 1, facing 1, clientName ir.mouj, apiLevel 2
10-21 11:07:08.154 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:08.155 I/CameraService_proxy( 1407): wmi.addRefreshRateRangeForPackage minFPS = 30.000002, maxFPS = 60.0, clientName = ir.mouj
10-21 11:07:08.155 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.155 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.155 I/SehCamDevSession@5.0-impl( 1108): [CAMKPI] camera3->process_capture_request : X
10-21 11:07:08.155 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.155 D/Camera3-Device( 1449): CameraPerf: sendRequestsBatch X (2ms)
10-21 11:07:08.155 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.155 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.155 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:08.155 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:08.156 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.156 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.156 D/CameraAvailabilityListener( 2562): onCameraDeviceStateChanged: id=1, facing=1, state=CAMERA_STATE_ACTIVE, client=ir.mouj
10-21 11:07:08.156 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.156 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.156 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.157 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:08.157 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:08.157 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.160 I/lmkd    (  629): check finished camerakillboostmode
10-21 11:07:08.162 W/CameraService_proxy( 1407): Unknown extension type: -1
10-21 11:07:08.162 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:08.179 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:08.183 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:08.186 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:08.191 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:08.203 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:08.208 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:08.263 W/CameraService_proxy( 1407): Unknown extension type: -1
10-21 11:07:08.357 I/SehCamDevSession@5.0-impl( 1108): [CAMKPI] camera3->process_capture_result : E
10-21 11:07:08.359 I/SehCamDevSession@5.0-impl( 1108): [CAMKPI] camera3->process_capture_result : X
10-21 11:07:08.363 W/CameraService_proxy( 1407): Unknown extension type: -1
10-21 11:07:08.371 D/Camera3-OutputStream( 1449): returnBufferCheckedLocked: First frame for stream 0, width 640, height 480, format 35
10-21 11:07:08.374 E/Camera3-Stream( 1449): [VSync] getBuffer: Stream 0: wait for max dequeued buffer exceeds 30000us (164945)us
10-21 11:07:08.380 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:08.400 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:08.433 I/Camera2ClientBase( 1449): Creating CameraServiceWatchDog for disconnect with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:08.433 I/Camera2ClientBase( 1449): CameraServiceWatchDog::watchThread for disconnect with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:08.433 D/Camera2ClientBase( 1449): Camera 1: start to disconnect
10-21 11:07:08.433 D/Camera2ClientBase( 1449): Camera 1: serializationLock acquired
10-21 11:07:08.433 D/Camera2ClientBase( 1449): Camera 1: Shutting down
10-21 11:07:08.433 D/Camera2ClientBase( 1449): Camera 1: start to cacheDump
10-21 11:07:08.434 E/Camera3-Stream( 1449): [VSync] getBuffer: Stream 0: wait for max dequeued buffer exceeds 30000us (33298)us
10-21 11:07:08.437 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:08.438 E/Camera2-FrameProcessorBase( 1449): removeListener: 
10-21 11:07:08.443 D/Camera3-Device( 1449): flush: mInterfaceLock.lock()
10-21 11:07:08.443 I/Camera3-Device( 1449): Creating CameraServiceWatchDog for flush with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:08.444 I/Camera3-Device( 1449): CameraServiceWatchDog::watchThread for flush with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:08.444 D/HidlCamera3-Device( 1449): CameraPerf: flush E
10-21 11:07:08.444 I/Unihal  ( 1108): CameraHalUnit.cpp: Flush: 545: HAL flush - Start
10-21 11:07:08.467 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=9
10-21 11:07:08.467 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.468 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=10
10-21 11:07:08.468 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.469 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=3, errorStreamId=0, frameNumber=11
10-21 11:07:08.469 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.470 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 11 , due to buffer error.
10-21 11:07:08.471 I/Camera3-Status( 1449): markComponent: Component 1 is now idle - RequestThread
10-21 11:07:08.474 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=6
10-21 11:07:08.474 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.475 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=5
10-21 11:07:08.475 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.475 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=4
10-21 11:07:08.475 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.476 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=4
10-21 11:07:08.476 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.476 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 4 , due to buffer error.
10-21 11:07:08.481 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=5
10-21 11:07:08.481 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.481 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 5 , due to buffer error.
10-21 11:07:08.482 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=6
10-21 11:07:08.482 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.482 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 6 , due to buffer error.
10-21 11:07:08.484 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=8
10-21 11:07:08.484 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.485 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=7
10-21 11:07:08.485 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.486 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=7
10-21 11:07:08.486 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.486 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 7 , due to buffer error.
10-21 11:07:08.487 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=8
10-21 11:07:08.487 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.487 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 8 , due to buffer error.
10-21 11:07:08.488 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=9
10-21 11:07:08.488 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.488 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 9 , due to buffer error.
10-21 11:07:08.489 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=10
10-21 11:07:08.489 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:08.489 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 10 , due to buffer error.
10-21 11:07:08.489 I/Camera3-Status( 1449): markComponent: Component 2 is now idle - streamId = 0, format = 0x23(YUV_420_888), width = 640, height = 480, option = 0x0, type = OUTPUT
10-21 11:07:08.489 I/Camera3-IOStreamBase( 1449): FpsStats: stream 0, requested=12, received=12, valid=4, invalid=8
10-21 11:07:08.489 I/Camera3-Status( 1449): markComponent: Component 0 is now idle - InflightRequests
10-21 11:07:08.490 I/CameraService( 1449): finishCameraStreamingOps: finish camera streaming ops, package name = ir.mouj, client UID = 10372
10-21 11:07:08.491 I/CameraServiceProxyWrapper( 1449): updateProxyDeviceState: notifyCameraState for Camera ID 1, newState 2, facing 1, clientName ir.mouj, apiLevel 2
10-21 11:07:08.491 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.491 I/CameraService_proxy( 1407): wmi.removeRefreshRateRangeForPackage clientName = ir.mouj
10-21 11:07:08.491 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:08.491 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:08.491 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.491 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.491 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.492 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.492 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.492 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.492 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.492 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.492 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:08.492 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.492 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:08.493 D/CameraAvailabilityListener( 2562): onCameraDeviceStateChanged: id=1, facing=1, state=CAMERA_STATE_IDLE, client=ir.mouj
10-21 11:07:08.494 I/lmkd    (  629): check finished camerakillboostmode
10-21 11:07:08.494 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.498 I/Unihal  ( 1108): CameraHalUnit.cpp: Flush: 549: HAL flush - End
10-21 11:07:08.499 D/HidlCamera3-Device( 1449): CameraPerf: flush X (55ms)
10-21 11:07:08.499 D/Camera3-Device( 1449): waitUntilDrainedLocked: Camera 1: Waiting until idle (5000000000ns)
10-21 11:07:08.499 D/Camera3-Device( 1449): waitUntilDrained: mInterfaceLock.unlock()
10-21 11:07:08.500 I/Camera3-Device( 1449): disconnectImpl: E
10-21 11:07:08.500 I/CameraLatencyHistogram( 1449): ProcessCaptureRequest latency histogram (12) samples:
10-21 11:07:08.500 I/CameraLatencyHistogram( 1449):        20     40     60     80    100    120    140    160    180    inf (max ms)
10-21 11:07:08.500 I/CameraLatencyHistogram( 1449):      100.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00 (%)
10-21 11:07:08.500 I/Camera3-Device( 1449): CameraServiceWatchDog::watchThread for disconnectImpl with cycles=100, cycleLength=100ms, timer=10000ms
10-21 11:07:08.500 D/HidlCamera3-Device( 1449): CameraPerf: close E
10-21 11:07:08.500 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_close_camera_hardware: 479: E
10-21 11:07:08.500 I/Unihal  ( 1108): CameraHalManager.cpp: CloseCamera: 275: HAL close - Start
10-21 11:07:08.503 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1319 close() after process camera close
10-21 11:07:08.503 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1331 close() Close: overrideCameraClose is 47 , overrideCameraOpen is 0 
10-21 11:07:08.556 I/QC_3A   ( 1108):  INFO: AEC: AECDestroy: 457: Received Camera close mask 0x2f
10-21 11:07:08.556 I/QC_3A   ( 1108):  INFO: AEC: AECDestroy: 465: Received CameraID: 5  Internal CameraID : 1
10-21 11:07:08.557 I/QC_3A   ( 1108):  INFO: AEC: AECDestroy: 487: isCameraClose: 1
10-21 11:07:08.564 I/QC_3A   ( 1108):  INFO: AWB: AWBDestroy: 333: Received Camera close mask 0x2f
10-21 11:07:08.565 I/QC_3A   ( 1108):  INFO: AWB: AWBDestroy: 341: Received CameraID: 5  Internal CameraID : 1
10-21 11:07:08.565 I/QC_3A   ( 1108):  INFO: AWB: AWBDestroy: 359: isCameraClose: 1
10-21 11:07:08.566 I/QC_3A   ( 1108):  INFO:  AF: AFDestroy: 258: Received Camera close mask 0x2f
10-21 11:07:08.566 I/QC_3A   ( 1108):  INFO:  AF: AFDestroy: 266: Received CameraID: 5  Internal CameraID : 1
10-21 11:07:08.566 I/QC_3A   ( 1108):  INFO:  AF: AFDestroy: 276: isCameraClose: 1
10-21 11:07:08.616 I/CameraProviderManager( 1449): Camera device device@3.5/legacy/1 torch status is now AVAILABLE_OFF
10-21 11:07:08.616 I/CameraService( 1449): onTorchStatusChangedLocked: Torch status changed for cameraId=1, newStatus=1
10-21 11:07:08.616 E/CameraService( 1449): onTorchStatusChangedLocked: cannot get torch status of camera 1: No such file or directory (-2)
10-21 11:07:08.616 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1335 close() Close done on cameraId 3
10-21 11:07:08.616 I/Unihal  ( 1108): CameraHalManager.cpp: CloseCamera: 279: HAL close - End
10-21 11:07:08.616 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_close_camera_hardware: 493: X (0)
10-21 11:07:08.616 D/HidlCamera3-Device( 1449): CameraPerf: close X (116ms)
10-21 11:07:08.616 D/Camera3-OutputStream( 1449): disconnectLocked: disconnecting stream 0 from native window
10-21 11:07:08.619 I/CameraLatencyHistogram( 1449): Stream 0 dequeueBuffer latency histogram (12) samples:
10-21 11:07:08.619 I/CameraLatencyHistogram( 1449):         5     10     15     20     25     30     35     40     45    inf (max ms)
10-21 11:07:08.619 I/CameraLatencyHistogram( 1449):      83.33   8.33   8.33   0.00   0.00   0.00   0.00   0.00   0.00   0.00 (%)
10-21 11:07:08.619 I/CameraLatencyHistogram( 1449): Stream 0 enqueueBuffer latency histogram (4) samples:
10-21 11:07:08.619 I/CameraLatencyHistogram( 1449):         5     10     15     20     25     30     35     40     45    inf (max ms)
10-21 11:07:08.619 I/CameraLatencyHistogram( 1449):      100.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00 (%)
10-21 11:07:08.619 I/Camera3-Device( 1449): disconnectImpl: X
10-21 11:07:08.619 I/CameraServiceProxyWrapper( 1449): updateProxyDeviceState: notifyCameraState for Camera ID 1, newState 3, facing 1, clientName ir.mouj, apiLevel 2
10-21 11:07:08.620 I/Camera3-Device( 1449): setDeviceInjector
10-21 11:07:08.620 D/CameraService( 1449): BasicClient::disconnect E
10-21 11:07:08.620 I/CameraService_proxy( 1407): Notify nfc service : camera open was(true) -> now(false) = polling(true)
10-21 11:07:08.622 I/CameraService( 1449): finishCameraOps: Finish camera ops, package name = ir.mouj, client UID = 10372
10-21 11:07:08.622 I/CameraService( 1449): decreaseCamConnRef: ref=0
10-21 11:07:08.623 D/BatteryExternalStatsWorker( 1407): update stats : camera-off (64)
10-21 11:07:08.624 I/CameraService( 1449): decreaseCamConnRef: service.camera.running set to 0
10-21 11:07:08.625 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.625 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.625 I/CameraManagerGlobal( 4699): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:08.625 I/CameraManagerGlobal( 6629): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:08.625 I/CameraManagerGlobal( 8100): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:08.625 I/CameraManagerGlobal( 4699): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:08.625 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.625 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:08.625 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:08.625 I/CameraManagerGlobal(14831): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:08.625 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.625 I/IC_Service[1.2.93]( 6629): onCameraAvailable(1)
10-21 11:07:08.625 I/CameraManagerGlobal( 5245): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:08.626 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.626 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.626 I/HBD     ( 5245): k Camera is available, camId = 1 
10-21 11:07:08.626 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.626 I/CameraManagerGlobal(18970): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:08.626 I/HBD     ( 5245): k All camera is available, so, ExtractText will be enabled 
10-21 11:07:08.626 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.626 I/CameraManagerGlobal(10793): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:08.626 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.626 I/CameraManagerGlobal( 1407): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:08.627 I/CameraManagerGlobal( 1407): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:08.627 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.627 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:08.627 D/NfcService( 2807): setReaderMode: uid=1000, packageName: com.samsung.android.cameraxservice, flags: 0
10-21 11:07:08.627 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:08.627 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:08.627 D/CameraAvailabilityListener( 2562): onCameraDeviceStateChanged: id=1, facing=1, state=CAMERA_STATE_CLOSED, client=ir.mouj
10-21 11:07:08.628 I/lmkd    (  629): check finished camerakillboostmode
10-21 11:07:08.629 I/CameraService_worker( 1407): DeviceInjector, onSemCameraDeviceRawStatus 1 1
10-21 11:07:08.629 I/RequestInjectorService( 1407): Camera is closed. cameraId(1), state(█│)
10-21 11:07:08.631 I/CameraFlashlight( 1449): deviceClosed: device 1 is closed
10-21 11:07:08.631 I/CameraService( 1449): disconnect: Disconnected client for camera 1 for PID 8100
10-21 11:07:08.632 D/cameraserver( 1449): FGS Logger Transaction failed
10-21 11:07:08.632 D/cameraserver( 1449): -129
10-21 11:07:08.632 D/CameraService( 1449): BasicClient::disconnect X
10-21 11:07:08.633 I/VSET/ObserveCameraStateService( 6368): onStartCommand : unihal 3.01
10-21 11:07:08.633 I/VSET/ObserveCameraStateService( 6368): initAppRepository is created already
10-21 11:07:08.633 I/VSET/ObserveCameraStateService( 6368): onStartCommand: true
10-21 11:07:08.634 D/PackageManager( 1407): setEnabledSetting : userId = 0 packageName = com.samsung.android.vtcamerasettings cmp = com.samsung.android.vtcamerasettings.settings.SettingsActivity newState = 1 callingPackage = 
com.samsung.android.vtcamerasettings
10-21 11:07:08.637 D/ApplicationPolicy( 1407): getApplicationStateEnabled : pkg = com.samsung.android.vtcamerasettings userId : 0
10-21 11:07:08.637 D/ApplicationPolicy( 1407): getApplicationComponentState : pkg = com.samsung.android.vtcamerasettings userId : 0
10-21 11:07:08.639 I/VSET/ObserveCameraStateService( 6368): onStartCommand: update SALogging status
10-21 11:07:08.640 I/VSET/ObserveCameraStateService( 6368): processDeviceInjectorIntent: not supported device injector
10-21 11:07:08.643 E/ScreenDecorations( 2562): CutoutView not initialized hideCameraProtection
10-21 11:07:08.643 I/VSET/ObserveCameraStateService( 6368): updateAppInfoRepository: E 
10-21 11:07:08.644 I/VSET/ObserveCameraStateService( 6368): initAppRepository is created already
10-21 11:07:08.646 I/VSET/ObserveCameraStateService( 6368): requestStopService
10-21 11:07:08.866 W/CameraService_proxy( 1407): Unknown extension type: -1
10-21 11:07:09.468 W/CameraService_proxy( 1407): Unknown extension type: -1
10-21 11:07:10.693 I/EDMNativeHelperService( 1407): isCameraEnabled
10-21 11:07:10.693 D/EDMNativeHelper( 1407): isCameraEnabled
10-21 11:07:10.693 D/EDMNativeHelper( 1407): checking for camera in EnterpriseDeviceManagerService
10-21 11:07:10.693 D/EnterpriseDeviceManagerService( 1407): isCameraEnabledNative
10-21 11:07:10.693 D/EnterpriseDeviceManagerService( 1407): checking for camera in restriction policy
10-21 11:07:10.693 D/RestrictionPolicy( 1407): isCameraEnabled ret(true) userId(0) cxtInfo.mCallerUid(10372) cxtInfo.mContainerId(0)
10-21 11:07:11.166 I/EDMNativeHelperService( 1407): isCameraEnabled
10-21 11:07:11.166 D/EDMNativeHelper( 1407): isCameraEnabled
10-21 11:07:11.166 D/EDMNativeHelper( 1407): checking for camera in EnterpriseDeviceManagerService
10-21 11:07:11.166 D/EnterpriseDeviceManagerService( 1407): isCameraEnabledNative
10-21 11:07:11.166 D/EnterpriseDeviceManagerService( 1407): checking for camera in restriction policy
10-21 11:07:11.166 D/RestrictionPolicy( 1407): isCameraEnabled ret(true) userId(0) cxtInfo.mCallerUid(10372) cxtInfo.mContainerId(0)
10-21 11:07:13.694 I/EDMNativeHelperService( 1407): isCameraEnabled
10-21 11:07:13.695 D/EDMNativeHelper( 1407): isCameraEnabled
10-21 11:07:13.695 D/EDMNativeHelper( 1407): checking for camera in EnterpriseDeviceManagerService
10-21 11:07:13.695 D/EnterpriseDeviceManagerService( 1407): isCameraEnabledNative
10-21 11:07:13.695 D/EnterpriseDeviceManagerService( 1407): checking for camera in restriction policy
10-21 11:07:13.695 D/RestrictionPolicy( 1407): isCameraEnabled ret(true) userId(0) cxtInfo.mCallerUid(10372) cxtInfo.mContainerId(0)
10-21 11:07:13.947 I/CameraService( 1449): CameraService::connect call (PID 8100 "ir.mouj", camera ID 1) and Camera API version 2
10-21 11:07:13.949 I/CameraService( 1449): isUidActiveLocked E: uid 10372, callingPackage ir.mouj, isRegistered true
10-21 11:07:13.949 I/CameraService( 1449): isUidActiveLocked X: uid 10372, callingPackage ir.mouj, isActive true.
10-21 11:07:13.949 I/EDMNativeHelperService( 1407): isCameraEnabled
10-21 11:07:13.949 D/EDMNativeHelper( 1407): isCameraEnabled
10-21 11:07:13.949 D/EDMNativeHelper( 1407): checking for camera in EnterpriseDeviceManagerService
10-21 11:07:13.949 D/EnterpriseDeviceManagerService( 1407): isCameraEnabledNative
10-21 11:07:13.949 D/EnterpriseDeviceManagerService( 1407): checking for camera in restriction policy
10-21 11:07:13.949 D/RestrictionPolicy( 1407): isCameraEnabled ret(true) userId(0) cxtInfo.mCallerUid(10372) cxtInfo.mContainerId(0)
10-21 11:07:13.950 I/CameraService( 1449): CameraService::validateClientPermissionsLocked is ok : calling pid 8100, calling uid 10372, client ir.mouj , cameraservice pid=1449, device user 0, currently allowed device users: 0
10-21 11:07:13.950 I/CameraService( 1449): CameraService::handleEvictionsLocked
10-21 11:07:13.950 I/CameraService( 1449): wouldEvictLocked: [incoming client] owner = 8100, priority-score=0, cost=100, returnIncompatibleClients=false
10-21 11:07:13.950 I/CameraService( 1449): wouldEvictLocked: [cost info] current cost=0, adding cost=100, total cost=100, max cost=100
10-21 11:07:13.950 I/CameraService( 1449): wouldEvictLocked: [highestPriority] owner=8100, score=0
10-21 11:07:13.950 I/CameraFlashlight( 1449): prepareDeviceOpen: prepare for device open(cameraId=1)
10-21 11:07:13.950 I/Camera2ClientBase( 1449): Camera 1: Opened. Client: ir.mouj (PID 8100, UID 10372)
10-21 11:07:13.950 I/CameraDeviceClient( 1449): CameraDeviceClient 1: Opened
10-21 11:07:13.950 I/CameraService( 1449): isNoSALoggingPackage: ir.mouj is a third party package.
10-21 11:07:13.950 I/CameraService( 1449): makeClient: Camera2 API, override to portrait 0
10-21 11:07:13.951 I/CameraService( 1449): service.camera.client set to ir.mouj
10-21 11:07:13.951 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.951 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.952 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:13.952 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:13.952 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.952 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.953 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.953 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:13.953 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:13.953 I/RequestInjectorService( 1407): Camera is opening. Start VT Camera Setting. cameraId(1), displayId(█░)
10-21 11:07:13.953 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.953 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.953 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.953 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.954 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.953 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPENING for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.954 I/VSET/ObserveCameraStateService( 6368): onStartCommand : unihal 3.01
10-21 11:07:13.955 I/Camera2ClientBase( 1449): initializeImpl: Initializing client for camera 1
10-21 11:07:13.955 I/VSET/ObserveCameraStateService( 6368): initAppRepository is created already
10-21 11:07:13.955 D/ijt/Camera3-RequestInjector( 1449): RequestInjector[1] Mapper created
10-21 11:07:13.955 I/Camera3-Device( 1449): Camera3Device: Created device for camera 1
10-21 11:07:13.955 D/HidlCamera3-Device( 1449): CameraPerf: initialize E
10-21 11:07:13.955 D/HidlCamera3-Device( 1449): initialize: mInterfaceLock.lock()
10-21 11:07:13.955 I/CameraProviderManager( 1449): openHidlSession, using trampoline for v5.0
10-21 11:07:13.955 D/CameraProviderManager( 1449): CameraPerf: openHidlSession E
10-21 11:07:13.955 I/SehCamDev@5.0-impl( 1108): [CAMKPI] camera3->open : E
10-21 11:07:13.955 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_open_camera_hardware: 550: E cameraName: 1
10-21 11:07:13.955 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_open_camera_hardware: 552: UNIHAL_VERSION = "2.15"
10-21 11:07:13.955 I/Unihal  ( 1108): CameraDevice.cpp: OpenCameraHardware_v3: 401: name : 1 camera id : 1
10-21 11:07:13.955 I/CameraProviderManager( 1449): Camera device device@3.5/legacy/1 torch status is now NOT_AVAILABLE
10-21 11:07:13.955 I/CameraService( 1449): onTorchStatusChangedLocked: Torch status changed for cameraId=1, newStatus=0
10-21 11:07:13.955 E/CameraService( 1449): onTorchStatusChangedLocked: cannot get torch status of camera 1: No such file or directory (-2)
10-21 11:07:13.956 I/VSET/ObserveCameraStateService( 6368): onStartCommand: true
10-21 11:07:13.958 D/PackageManager( 1407): setEnabledSetting : userId = 0 packageName = com.samsung.android.vtcamerasettings cmp = com.samsung.android.vtcamerasettings.settings.SettingsActivity newState = 1 callingPackage = 
com.samsung.android.vtcamerasettings
10-21 11:07:13.959 D/ApplicationPolicy( 1407): getApplicationStateEnabled : pkg = com.samsung.android.vtcamerasettings userId : 0
10-21 11:07:13.959 D/ApplicationPolicy( 1407): getApplicationComponentState : pkg = com.samsung.android.vtcamerasettings userId : 0
10-21 11:07:13.961 I/VSET/ObserveCameraStateService( 6368): onStartCommand: update SALogging status
10-21 11:07:13.961 I/VSET/ObserveCameraStateService( 6368): processDeviceInjectorIntent: not supported device injector
10-21 11:07:13.963 I/VSET/ObserveCameraStateService( 6368): updateAppInfoRepository: E 
10-21 11:07:13.963 I/VSET/ObserveCameraStateService( 6368): initAppRepository is created already
10-21 11:07:13.964 I/VSET/ObserveCameraStateService( 6368): requestStopService
10-21 11:07:13.969 I/Unihal  ( 1108): ParameterManager.cpp: SetCameraCharacteristics: 116: Registered camera characteristics successfully. : cameraId=1, characteristics=0xb400007c150dd560
10-21 11:07:13.969 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_open_camera_hardware: 578: X (0)
10-21 11:07:13.969 I/SehCamDev@5.0-impl( 1108): [CAMKPI] camera3->open : X
10-21 11:07:13.972 D/CameraProviderManager( 1449): CameraPerf: openHidlSession X (17ms)
10-21 11:07:13.974 D/HidlCamera3-Device( 1449): CameraPerf: initialize X (19ms)
10-21 11:07:13.974 D/Camera3-Device( 1449): CameraPerf: initializeCommonLocked: E
10-21 11:07:13.975 I/Camera3-Status( 1449): addComponent: Adding new component 0 - InflightRequests
10-21 11:07:13.975 I/Camera3-Status( 1449): addComponent: Adding new component 1 - RequestThread
10-21 11:07:13.975 D/Camera3-Device( 1449): initializeCommonLocked mTimestampOffset = 1155765056712737ns.
10-21 11:07:13.976 D/Camera3-Device( 1449): CameraPerf: initializeCommonLocked: X (1ms)
10-21 11:07:13.976 I/CameraService( 1449): startCameraOps: Start camera ops, package name = ir.mouj, client UID = 10372
10-21 11:07:13.982 I/CameraService( 1449): increaseCamConnRef: ref=1
10-21 11:07:13.982 I/CameraService( 1449): increaseCamConnRef: service.camera.running set to 1
10-21 11:07:13.983 I/CameraManagerGlobal( 4699): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:13.983 I/CameraManagerGlobal(10793): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:13.983 I/CameraManagerGlobal(14831): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:13.983 I/CameraManagerGlobal( 4699): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:13.983 I/CameraManagerGlobal( 8100): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:13.983 E/Camera2-FrameProcessorBase( 1449): FrameProcessorBase: created
10-21 11:07:13.983 I/CameraManagerGlobal(18970): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:13.983 I/CameraManagerGlobal( 6629): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:13.983 E/Camera2-FrameProcessorBase( 1449): registerListener: Registering listener for frame id range 0 - 2147483647
10-21 11:07:13.983 I/CameraService( 1449): connectHelper: overrideCameraMuteMode = false, isCameraPrivacyEnabled = false
10-21 11:07:13.983 I/Camera3-Device( 1449): setCameraMute, enabled = false, supported = true
10-21 11:07:13.983 I/CameraService( 1449): CameraService::finishConnectLocked E
10-21 11:07:13.983 I/CameraService( 1449): wouldEvictLocked: [incoming client] owner = 8100, priority-score=0, cost=100, returnIncompatibleClients=false
10-21 11:07:13.983 I/CameraService( 1449): wouldEvictLocked: [cost info] current cost=0, adding cost=100, total cost=100, max cost=100
10-21 11:07:13.983 I/CameraService( 1449): wouldEvictLocked: [highestPriority] owner=8100, score=0
10-21 11:07:13.984 I/CameraManagerGlobal( 5245): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:13.984 I/CameraService( 1449): addAndEvict: push the client(owner 8100, priorityScore 0, state 2) to mClients
10-21 11:07:13.984 I/HBD     ( 5245): k Camera is used by another app, camId = 1 
10-21 11:07:13.984 I/CameraService( 1449): CameraService::finishConnectLocked X
10-21 11:07:13.984 I/IC_Service[1.2.93]( 6629): onCameraUnavailable(1)
10-21 11:07:13.984 I/CameraDeviceClient( 1449): notifyAppPackageName
10-21 11:07:13.984 D/HidlCamera3-Device( 1449): CameraPerf: setParameters E
10-21 11:07:13.984 D/HidlCamera3-Device( 1449): CameraPerf: setParameters X (0ms)
10-21 11:07:13.984 D/BatteryExternalStatsWorker( 1407): update stats : camera-on (64)
10-21 11:07:13.984 I/CameraService( 1449): Notified package name to HAL.
10-21 11:07:13.984 I/CameraService( 1449): connectHelper: Skip Request Injector ExtraRequests to new client(ir.mouj)
10-21 11:07:13.985 I/CameraServiceProxyWrapper( 1449): updateProxyDeviceState: notifyCameraState for Camera ID 1, newState 0, facing 1, clientName ir.mouj, apiLevel 2
10-21 11:07:13.985 I/CameraManagerGlobal( 1407): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:13.985 I/CameraManagerGlobal( 1407): postSingleUpdate device: camera id 1 status STATUS_NOT_AVAILABLE
10-21 11:07:13.985 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.985 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:13.985 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:13.985 I/CameraService_worker( 1407): DeviceInjector, onSemCameraDeviceRawStatus 1 -2
10-21 11:07:13.986 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.986 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.986 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.987 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.987 I/CameraService( 1449): isNoSALoggingPackage: ir.mouj is a third party package.
10-21 11:07:13.987 D/cameraserver( 1449): FGS Logger Transaction failed
10-21 11:07:13.987 I/lmkd    (  629): check CAMERA OPEN -31568, memlimit: 112781, other_free: 27993, saved_ion_idle_camera: 0, cameraprocsize: 65997, kgsl: 100498, vmallocapi: 59309, diff_available: 23380 
10-21 11:07:13.987 D/cameraserver( 1449): -129
10-21 11:07:13.987 I/lmkd    (  629): check finished camerakillboostmode
10-21 11:07:13.987 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.987 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.987 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.987 D/CameraAvailabilityListener( 2562): onCameraDeviceStateChanged: id=1, facing=1, state=CAMERA_STATE_OPEN, client=ir.mouj
10-21 11:07:13.987 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.987 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:13.987 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:13.988 I/AudioManager( 1407): setParameters keyValuePairs = cameraFacing=front
10-21 11:07:13.988 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.988 E/cr_VideoCapture( 8100): CameraDevice.StateCallback onOpened
10-21 11:07:13.989 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_OPEN for client ir.mouj API Level 2 User Id 0
10-21 11:07:13.989 D/audio_hw_primary( 1075): adev_set_parameters: enter: cameraFacing=front
10-21 11:07:13.989 D/HidlCamera3-Device( 1449): CameraPerf: constructDefaultRequestSettings templateId: 1 E
10-21 11:07:13.989 D/HidlCamera3-Device( 1449): CameraPerf: constructDefaultRequestSettings X (0ms)
10-21 11:07:13.990 I/CameraService_proxy( 1407): Notify nfc service : camera open was(false) -> now(true) = polling(false)
10-21 11:07:13.991 D/NfcService( 2807): setReaderMode: uid=1000, packageName: com.samsung.android.cameraxservice, flags: 4096
10-21 11:07:13.995 I/WindowManager( 2562): WindowManagerGlobal#addView, ty=2024, view=com.android.systemui.RegionInterceptingFrameLayout{cdf4f23 V.E...... ......I. 0,0-0,0}, caller=android.view.WindowManagerImpl.addView:150 
com.android.systemui.ScreenDecorations.setupDecorations:804 com.android.systemui.ScreenDecorations$1.onApplyCameraProtection:54 
10-21 11:07:14.004 D/Camera3-Device( 1449): waitUntilDrained: mInterfaceLock.unlock()
10-21 11:07:14.008 D/CameraDeviceClient( 1449): createStream E
10-21 11:07:14.008 D/SessionConfigUtils( 1449): createSurfaceFromGbp E: logicalCameraId=1, isStreamInfoValid=0, useCase=0, option=0x0, mirrorMode=0
10-21 11:07:14.019 D/Camera3-Device( 1449): createStream: mInterfaceLock.lock()
10-21 11:07:14.019 D/Camera3-Device( 1449): createStream: Camera 1: Creating new stream 0: 640 x 480, format 0x23(YUV_420_888), dataspace 146931712 rotation 0 consumer usage 0, isShared 0, physicalCameraId , isMultiResolution 
0 dynamicRangeProfile 0x1, streamUseCase 0, option 0x0, timestampBase 0, mirrorMode 0, colorSpace -1, useReadoutTimestamp 0
10-21 11:07:14.028 D/Camera3-Device( 1449): createStream: mInterfaceLock.unlock()
10-21 11:07:14.028 D/CameraDeviceClient( 1449): createStream: Camera 1: Successfully created a new stream ID 0 for output surface (640 x 480) with format 0x23.
10-21 11:07:14.028 D/Camera3-Device( 1449): setStreamTransform: mInterfaceLock.lock()
10-21 11:07:14.028 D/CameraDeviceClient( 1449): createStream X
10-21 11:07:14.030 D/Camera3-Device( 1449): filterParamsAndConfigureLocked : operatingMode=0
10-21 11:07:14.030 D/Camera3-Device( 1449): CameraPerf: configureStreamsLocked: Camera 1: Stream configuration E
10-21 11:07:14.030 I/HidlCamera3-Device( 1449): configureStreams Before configuration Stream[0] : [640 x 480], usage: 0x3
10-21 11:07:14.031 I/SehCamDevSession@5.0-impl( 1108): [CAMKPI] camera3->configure_streams : E
10-21 11:07:14.031 I/Unihal  ( 1108): CameraHalUnit.cpp: ConfigureStreams: 232: cameraId=1, GetIsAlreadyCreated=0
10-21 11:07:14.031 I/Unihal  ( 1108): ScenarioManager.cpp: FindScenarioInfo: 2072: Current shootingMode=0x0001000c(UNI_SHOOTING_MODE_3RD_PARTY_BYPASS), cameraId=1(UNI_FWK_CAMERA_ID_FRONT)
10-21 11:07:14.031 I/Unihal  ( 1108): ScenarioManager.cpp: CheckEnableCondition: 2222: Unihal is disabled. : isSamsungCamera=false, isFactoryTest=false, isGalaxyRaw = false, isAllowed3rdParty=true, foundScenario=false, 
isValidStreamConfiguration=false, isSamsungVdisEnabled=false, isTestPatternMode=false, shootingMode=UNI_SHOOTING_MODE_3RD_PARTY_BYPASS
10-21 11:07:14.031 I/Unihal  ( 1108): CameraHalUnit.cpp: ConfigureStreams: 260: Unihal is bypass mode in current scenario.
10-21 11:07:14.031 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1535 configure_streams() HalOp: Begin CONFIG: 0xb400007ac39e2730, logicalCameraId: 3, cameraId: 1
10-21 11:07:14.031 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1568 configure_streams()             stream_type  : 00000000, CAMERA3_STREAM_OUTPUT
10-21 11:07:14.031 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1575 configure_streams()             rotation     : 00000000, CAMERA3_STREAM_ROTATION_0
10-21 11:07:14.031 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1583 configure_streams()        physical_camera_id         : 
10-21 11:07:14.031 I/CHIUSECASE( 1108): [CONFIG ] chxextensionmodule.cpp:1187 SetHALOps() SetHALOps being set for CameraID:3
10-21 11:07:14.040 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:14.046 W/CHIUSECASE( 1108): [WARN   ] chifeature2graphmanager.cpp:345 LoadFeatureGraphSelectorOps() No graph selector library files found in the path /vendor/lib64/camera/components/feature2/oem
10-21 11:07:14.058 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:14.058 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:14.058 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:14.059 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:14.063 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:14.066 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:14.070 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:14.072 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:14.085 E/CHIUSECASE( 1108): [ERROR  ] chxsensorselectmode_a52s.cpp:864 FindBestSensorMode() Selected Usecase: 8, cameraId:5 sensorId:13, SelectedMode W=3264, H=2448, FPS:30, NumBatchedFrames:1, modeIndex:2
10-21 11:07:14.086 W/CHIUSECASE( 1108): [WARN   ] chxsession.cpp:154 Initialize() flags.flags.u.FASTAEC = 0 , isFastAECState = 0 (logicalCameraId 12)
10-21 11:07:14.113 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 948: StaticAEC algo create: camera open mask 32 
10-21 11:07:14.113 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 841: Given Camera role=0, camera id=5
10-21 11:07:14.113 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 958: CameraOpenIndicator : 1
10-21 11:07:14.113 I/QC_3A   ( 1108):  INFO: AEC: QcWrapperCommonFillSensorIdMap: 26: Already filled, cameraId(5) driverSensorId(13)
10-21 11:07:14.113 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 978: Internal camera id = 1
10-21 11:07:14.120 I/QC_3A   ( 1108):  INFO: AEC: QcAecLoadTuningParamsFromDAT: 73: /data/vendor/camera/QcAecWrapperTuned_Front.dat : No such file or directory
10-21 11:07:14.120 E/QC_3A   ( 1108): ERROR: AEC: QcAecWrapperInitData: 660: Motion Library loading error: dlopen failed: library "/vendor/lib64/camera/components/libMOTION.so" not found
10-21 11:07:14.120 I/QC_3A   ( 1108):  INFO: AEC: CreateAECAlgorithm: 1101: AEC Wrapper is created - InstanceCnt=1, algo=0xb400007b750786d0, wrapper data=0xb400007b7502f7d0, curCameraID=1
10-21 11:07:14.121 I/QC_3A   ( 1108):  INFO: AEC: QcAecGetParamFillOutputPointers: 337: AECAlgoGetParamStartExposure - reqID: 0, cameraId: 1
10-21 11:07:14.133 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 602: StaticAWB algo create: camera open mask 32 
10-21 11:07:14.133 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 530: Given Camera role=0, camera id=5
10-21 11:07:14.133 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 677: CameraOpenIndicator : 1
10-21 11:07:14.133 I/QC_3A   ( 1108):  INFO: AWB: QcWrapperCommonFillSensorIdMap: 26: Already filled, cameraId(5) driverSensorId(13)
10-21 11:07:14.133 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 697: Internal camera id = 1
10-21 11:07:14.139 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1699 configure_streams()             stream_type  : 00000000, CAMERA3_STREAM_OUTPUT
10-21 11:07:14.139 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1706 configure_streams()             rotation     : 00000000, CAMERA3_STREAM_ROTATION_0
10-21 11:07:14.140 I/SehCamDevSession@5.0-impl( 1108): [CAMKPI] camera3->configure_streams : X
10-21 11:07:14.140 D/HidlCamera3-Device( 1449): configureStreams : stream[0] : format = 0x23(YUV_420_888), data_space = 146931712, color_space = -1 usage flag = 0x20003 max_buffers = 8, physical_camera_id = 
10-21 11:07:14.140 D/Camera3-Device( 1449): CameraPerf: Connect Streams E
10-21 11:07:14.140 I/Camera3-Status( 1449): addComponent: Adding new component 2 - streamId = 0, format = 0x23(YUV_420_888), width = 640, height = 480, option = 0x0, type = OUTPUT
10-21 11:07:14.141 I/QC_3A   ( 1108):  INFO: AWB: CreateAWBAlgorithm: 823: AWB Wrapper is created - InstanceCnt=1, algo=0xb400007b5508a310, wrapper data=0xb400007b75025a50, curCameraID 1
10-21 11:07:14.141 I/QC_3A   ( 1108):  INFO: AWB: QcAwbSetSingleParamToAlgo: 61: [AWB-WARMSTART] Previous CameraID: FRONT(1) Current CameraID: FRONT(1)
10-21 11:07:14.142 D/Camera3-OutputStream( 1449): configureConsumerQueueLocked: Consumer wants 2 buffers, HAL wants 8
10-21 11:07:14.146 I/QC_3A   ( 1108):  INFO:  AF: CreateAFAlgorithm: 615: StaticAF algo create: camera open mask 32 
10-21 11:07:14.146 I/QC_3A   ( 1108):  INFO:  AF: CreateAFAlgorithm: 543: Given Camera role=0, camera id=5
10-21 11:07:14.146 I/QC_3A   ( 1108):  INFO:  AF: QcWrapperCommonFillSensorIdMap: 26: Already filled, cameraId(5) driverSensorId(13)
10-21 11:07:14.146 I/QC_3A   ( 1108):  INFO:  AF: CreateAFAlgorithm: 651: Internal camera id = 1
10-21 11:07:14.146 D/Camera3-Device( 1449): CameraPerf: Connect Streams X (5ms)
10-21 11:07:14.147 D/Camera3-Device( 1449): Set real time priority for request queue thread (tid 8432)
10-21 11:07:14.147 D/Camera3-Device( 1449): CameraPerf: configureStreamsLocked: Camera 1: Stream configuration X (117ms)
10-21 11:07:14.148 I/QC_3A   ( 1108):  INFO:  AF: CreateAFAlgorithm: 778: AEC Wrapper is created - InstanceCnt=1, algo=0xb400007b550aad40, wrapper data=0xb400007b75025030, curCameraID=1
10-21 11:07:14.150 D/Camera3-Device( 1449): setStreamingRequestList: Enter: calling submitRequestsHelper: repeating = true
10-21 11:07:14.150 D/Camera3-Device( 1449): submitRequestsHelper: mInterfaceLock.lock()
10-21 11:07:14.150 I/Camera3-Device( 1449): Submit request type: 0x1, repeating(true), burst(false)
10-21 11:07:14.150 D/Camera3-Device( 1449): setRepeatingRequests: lastFrameNumber 0.
10-21 11:07:14.150 I/Camera3-Status( 1449): markComponent: Component 1 is now active - RequestThread
10-21 11:07:14.150 I/CameraService( 1449): startCameraStreamingOps: Start camera streaming ops, package name = ir.mouj, client UID = 10372
10-21 11:07:14.150 D/Camera3-Device( 1449): CameraPerf: PrepareHALRequests E
10-21 11:07:14.151 I/EDMNativeHelperService( 1407): isCameraEnabled
10-21 11:07:14.151 D/EDMNativeHelper( 1407): isCameraEnabled
10-21 11:07:14.152 D/Camera3-Device( 1449): submitRequestsHelper: mInterfaceLock.unlock()
10-21 11:07:14.152 I/Camera3-Status( 1449): markComponent: Component 2 is now active - streamId = 0, format = 0x23(YUV_420_888), width = 640, height = 480, option = 0x0, type = OUTPUT
10-21 11:07:14.152 D/EDMNativeHelper( 1407): checking for camera in EnterpriseDeviceManagerService
10-21 11:07:14.152 I/CameraServiceProxyWrapper( 1449): updateProxyDeviceState: notifyCameraState for Camera ID 1, newState 1, facing 1, clientName ir.mouj, apiLevel 2
10-21 11:07:14.152 I/Camera3-Status( 1449): markComponent: Component 0 is now active - InflightRequests
10-21 11:07:14.152 D/EnterpriseDeviceManagerService( 1407): isCameraEnabledNative
10-21 11:07:14.152 D/Camera3-Device( 1449): CameraPerf: PrepareHALRequests X (1ms)
10-21 11:07:14.152 D/Camera3-Device( 1449): CameraPerf: sendRequestsBatch E
10-21 11:07:14.153 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.153 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.153 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:14.153 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.153 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:14.153 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:14.153 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:14.153 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.153 I/CameraService_proxy( 1407): wmi.addRefreshRateRangeForPackage minFPS = 30.000002, maxFPS = 60.0, clientName = ir.mouj
10-21 11:07:14.153 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.153 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.152 D/EnterpriseDeviceManagerService( 1407): checking for camera in restriction policy
10-21 11:07:14.154 I/SehCamDevSession@5.0-impl( 1108): [CAMKPI] camera3->process_capture_request : E
10-21 11:07:14.154 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:14.155 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.155 D/CameraAvailabilityListener( 2562): onCameraDeviceStateChanged: id=1, facing=1, state=CAMERA_STATE_ACTIVE, client=ir.mouj
10-21 11:07:14.155 I/SehCamDevSession@5.0-impl( 1108): [CAMKPI] camera3->process_capture_request : X
10-21 11:07:14.155 D/RestrictionPolicy( 1407): isCameraEnabled ret(true) userId(0) cxtInfo.mCallerUid(10372) cxtInfo.mContainerId(0)
10-21 11:07:14.155 D/Camera3-Device( 1449): CameraPerf: sendRequestsBatch X (3ms)
10-21 11:07:14.156 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.156 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.156 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.157 I/lmkd    (  629): check finished camerakillboostmode
10-21 11:07:14.158 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_ACTIVE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.160 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:14.166 I/Camera2ClientBase( 1449): Creating CameraServiceWatchDog for disconnect with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:14.166 I/Camera2ClientBase( 1449): CameraServiceWatchDog::watchThread for disconnect with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:14.166 D/Camera2ClientBase( 1449): Camera 1: start to disconnect
10-21 11:07:14.166 D/Camera2ClientBase( 1449): Camera 1: serializationLock acquired
10-21 11:07:14.166 D/Camera2ClientBase( 1449): Camera 1: Shutting down
10-21 11:07:14.166 D/Camera2ClientBase( 1449): Camera 1: start to cacheDump
10-21 11:07:14.166 E/camera_metadata( 1449): validate_camera_metadata_structure: metadata is null!
10-21 11:07:14.166 E/Camera2-Metadata( 1449): acquire: Failed to validate metadata structure 0x0
10-21 11:07:14.166 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:14.168 I/EDMNativeHelperService( 1407): isCameraEnabled
10-21 11:07:14.168 D/EDMNativeHelper( 1407): isCameraEnabled
10-21 11:07:14.169 D/EDMNativeHelper( 1407): checking for camera in EnterpriseDeviceManagerService
10-21 11:07:14.169 D/EnterpriseDeviceManagerService( 1407): isCameraEnabledNative
10-21 11:07:14.169 D/EnterpriseDeviceManagerService( 1407): checking for camera in restriction policy
10-21 11:07:14.169 D/RestrictionPolicy( 1407): isCameraEnabled ret(true) userId(0) cxtInfo.mCallerUid(10372) cxtInfo.mContainerId(0)
10-21 11:07:14.172 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:14.178 E/CHIUSECASE( 1108): [ERROR  ] chxadvancedcamerausecase.cpp:6617 SetPriorityMetadata() [3rd party DBG][ISO] ERROR, Check, please(37)
10-21 11:07:14.180 E/Camera2-FrameProcessorBase( 1449): removeListener: 
10-21 11:07:14.182 D/Camera3-Device( 1449): flush: mInterfaceLock.lock()
10-21 11:07:14.182 I/Camera3-Device( 1449): Creating CameraServiceWatchDog for flush with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:14.182 I/Camera3-Device( 1449): CameraServiceWatchDog::watchThread for flush with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:14.182 D/HidlCamera3-Device( 1449): CameraPerf: flush E
10-21 11:07:14.182 I/Unihal  ( 1108): CameraHalUnit.cpp: Flush: 545: HAL flush - Start
10-21 11:07:14.183 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=3, errorStreamId=0, frameNumber=5
10-21 11:07:14.183 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:14.183 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 5 , due to buffer error.
10-21 11:07:14.184 I/Camera3-Status( 1449): markComponent: Component 1 is now idle - RequestThread
10-21 11:07:14.203 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=0
10-21 11:07:14.203 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:14.204 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=0
10-21 11:07:14.204 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:14.205 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=1
10-21 11:07:14.205 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:14.205 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=1
10-21 11:07:14.205 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:14.205 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 1 , due to buffer error.
10-21 11:07:14.206 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=2
10-21 11:07:14.206 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:14.206 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=2
10-21 11:07:14.206 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:14.207 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 2 , due to buffer error.
10-21 11:07:14.207 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=3
10-21 11:07:14.207 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:14.208 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=3
10-21 11:07:14.208 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:14.208 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 3 , due to buffer error.
10-21 11:07:14.210 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=4, errorStreamId=0, frameNumber=4
10-21 11:07:14.210 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:14.212 E/CameraDeviceClient( 1449): notifyError: pid=8100, errorCode=5, errorStreamId=0, frameNumber=4
10-21 11:07:14.212 E/CameraDeviceClient( 1449): notifyError: pid=8100, skipClientNotification=false
10-21 11:07:14.212 E/Camera3-OutputStream( 1449): returnBufferCheckedLocked: A frame is dropped for stream 0 frame 4 , due to buffer error.
10-21 11:07:14.212 I/Camera3-Status( 1449): markComponent: Component 2 is now idle - streamId = 0, format = 0x23(YUV_420_888), width = 640, height = 480, option = 0x0, type = OUTPUT
10-21 11:07:14.212 I/Camera3-IOStreamBase( 1449): FpsStats: stream 0, requested=6, received=6, valid=0, invalid=6
10-21 11:07:14.212 I/Camera3-Status( 1449): markComponent: Component 0 is now idle - InflightRequests
10-21 11:07:14.213 I/CameraService( 1449): finishCameraStreamingOps: finish camera streaming ops, package name = ir.mouj, client UID = 10372
10-21 11:07:14.214 I/CameraServiceProxyWrapper( 1449): updateProxyDeviceState: notifyCameraState for Camera ID 1, newState 2, facing 1, clientName ir.mouj, apiLevel 2
10-21 11:07:14.214 I/Unihal  ( 1108): CameraHalUnit.cpp: Flush: 549: HAL flush - End
10-21 11:07:14.214 D/HidlCamera3-Device( 1449): CameraPerf: flush X (32ms)
10-21 11:07:14.214 D/Camera3-Device( 1449): waitUntilDrainedLocked: Camera 1: Waiting until idle (5000000000ns)
10-21 11:07:14.214 D/Camera3-Device( 1449): waitUntilDrained: mInterfaceLock.unlock()
10-21 11:07:14.214 I/Camera3-Device( 1449): disconnectImpl: E
10-21 11:07:14.215 I/CameraLatencyHistogram( 1449): ProcessCaptureRequest latency histogram (6) samples:
10-21 11:07:14.215 I/CameraLatencyHistogram( 1449):        20     40     60     80    100    120    140    160    180    inf (max ms)
10-21 11:07:14.215 I/CameraLatencyHistogram( 1449):      100.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00 (%)
10-21 11:07:14.215 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.215 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.215 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.215 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:14.215 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:14.215 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:14.215 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:14.215 I/CameraService_proxy( 1407): wmi.removeRefreshRateRangeForPackage clientName = ir.mouj
10-21 11:07:14.216 I/lmkd    (  629): check finished camerakillboostmode
10-21 11:07:14.216 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.216 D/CameraAvailabilityListener( 2562): onCameraDeviceStateChanged: id=1, facing=1, state=CAMERA_STATE_IDLE, client=ir.mouj
10-21 11:07:14.216 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.217 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.217 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.217 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.217 I/Camera3-Device( 1449): CameraServiceWatchDog::watchThread for disconnectImpl with cycles=100, cycleLength=100ms, timer=10000ms
10-21 11:07:14.217 D/HidlCamera3-Device( 1449): CameraPerf: close E
10-21 11:07:14.217 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.217 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_close_camera_hardware: 479: E
10-21 11:07:14.217 I/Unihal  ( 1108): CameraHalManager.cpp: CloseCamera: 275: HAL close - Start
10-21 11:07:14.217 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.218 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_IDLE for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.221 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1319 close() after process camera close
10-21 11:07:14.222 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1331 close() Close: overrideCameraClose is 47 , overrideCameraOpen is 0 
10-21 11:07:14.283 I/QC_3A   ( 1108):  INFO: AEC: AECDestroy: 457: Received Camera close mask 0x2f
10-21 11:07:14.283 I/QC_3A   ( 1108):  INFO: AEC: AECDestroy: 465: Received CameraID: 5  Internal CameraID : 1
10-21 11:07:14.284 I/QC_3A   ( 1108):  INFO: AEC: AECDestroy: 487: isCameraClose: 1
10-21 11:07:14.288 I/QC_3A   ( 1108):  INFO: AWB: AWBDestroy: 333: Received Camera close mask 0x2f
10-21 11:07:14.289 I/QC_3A   ( 1108):  INFO: AWB: AWBDestroy: 341: Received CameraID: 5  Internal CameraID : 1
10-21 11:07:14.289 I/QC_3A   ( 1108):  INFO: AWB: AWBDestroy: 359: isCameraClose: 1
10-21 11:07:14.295 I/QC_3A   ( 1108):  INFO:  AF: AFDestroy: 258: Received Camera close mask 0x2f
10-21 11:07:14.295 I/QC_3A   ( 1108):  INFO:  AF: AFDestroy: 266: Received CameraID: 5  Internal CameraID : 1
10-21 11:07:14.295 I/QC_3A   ( 1108):  INFO:  AF: AFDestroy: 276: isCameraClose: 1
10-21 11:07:14.352 I/CameraProviderManager( 1449): Camera device device@3.5/legacy/1 torch status is now AVAILABLE_OFF
10-21 11:07:14.352 I/CameraService( 1449): onTorchStatusChangedLocked: Torch status changed for cameraId=1, newStatus=1
10-21 11:07:14.352 E/CameraService( 1449): onTorchStatusChangedLocked: cannot get torch status of camera 1: No such file or directory (-2)
10-21 11:07:14.352 E/CamX    ( 1108): [ERROR][HAL    ] camxhal3.cpp:1335 close() Close done on cameraId 3
10-21 11:07:14.352 I/Unihal  ( 1108): CameraHalManager.cpp: CloseCamera: 279: HAL close - End
10-21 11:07:14.353 I/Unihal  ( 1108): UniHal3InterfaceEntry.cpp: uni_close_camera_hardware: 493: X (0)
10-21 11:07:14.353 D/HidlCamera3-Device( 1449): CameraPerf: close X (135ms)
10-21 11:07:14.353 D/Camera3-OutputStream( 1449): disconnectLocked: disconnecting stream 0 from native window
10-21 11:07:14.354 I/CameraLatencyHistogram( 1449): Stream 0 dequeueBuffer latency histogram (6) samples:
10-21 11:07:14.355 I/CameraLatencyHistogram( 1449):         5     10     15     20     25     30     35     40     45    inf (max ms)
10-21 11:07:14.355 I/CameraLatencyHistogram( 1449):      100.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00   0.00 (%)
10-21 11:07:14.355 I/Camera3-Device( 1449): disconnectImpl: X
10-21 11:07:14.355 I/CameraServiceProxyWrapper( 1449): updateProxyDeviceState: notifyCameraState for Camera ID 1, newState 3, facing 1, clientName ir.mouj, apiLevel 2
10-21 11:07:14.355 I/Camera3-Device( 1449): setDeviceInjector
10-21 11:07:14.355 D/CameraService( 1449): BasicClient::disconnect E
10-21 11:07:14.355 I/CameraService_proxy( 1407): Notify nfc service : camera open was(true) -> now(false) = polling(true)
10-21 11:07:14.356 D/NfcService( 2807): setReaderMode: uid=1000, packageName: com.samsung.android.cameraxservice, flags: 0
10-21 11:07:14.358 I/CameraService( 1449): finishCameraOps: Finish camera ops, package name = ir.mouj, client UID = 10372
10-21 11:07:14.358 I/CameraService( 1449): decreaseCamConnRef: ref=0
10-21 11:07:14.358 D/BatteryExternalStatsWorker( 1407): update stats : camera-off (64)
10-21 11:07:14.359 I/CameraService( 1449): decreaseCamConnRef: service.camera.running set to 0
10-21 11:07:14.360 I/CameraManagerGlobal( 4699): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:14.360 I/CameraManagerGlobal( 4699): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:14.361 I/CameraManagerGlobal( 1407): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:14.361 I/CameraManagerGlobal( 1407): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:14.361 I/CameraService_worker( 1407): DeviceInjector, onSemCameraDeviceRawStatus 1 1
10-21 11:07:14.361 I/CameraManagerGlobal( 5245): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:14.361 I/CameraManagerGlobal(14831): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:14.362 I/CameraManagerGlobal( 2806): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.362 I/CameraManagerGlobal( 6629): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:14.362 I/CameraManagerGlobal(10793): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:14.362 I/CameraManagerGlobal( 8100): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:14.362 I/IC_Service[1.2.93]( 6629): onCameraAvailable(1)
10-21 11:07:14.362 I/CameraManagerGlobal( 2562): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.362 D/CameraAvailabilityListener( 2562): onCameraDeviceStateChanged: id=1, facing=1, state=CAMERA_STATE_CLOSED, client=ir.mouj
10-21 11:07:14.362 I/CameraManagerGlobal(14831): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.363 I/CameraManagerGlobal(10793): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.363 I/CameraManagerGlobal( 1407): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.363 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:14.363 I/CameraManagerGlobal( 1407): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:14.364 I/RequestInjectorService( 1407): Camera is closed. cameraId(1), state(█│)
10-21 11:07:14.364 I/CameraManagerGlobal( 8100): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.364 I/CameraManagerGlobal( 6629): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.364 I/CameraManagerGlobal( 6368): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.364 I/lmkd    (  629): check finished camerakillboostmode
10-21 11:07:14.365 I/CameraManagerGlobal( 5245): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.365 I/HBD     ( 5245): k Camera is available, camId = 1 
10-21 11:07:14.365 I/HBD     ( 5245): k All camera is available, so, ExtractText will be enabled 
10-21 11:07:14.362 I/CameraManagerGlobal(18970): postSingleUpdate device: camera id 1 status STATUS_PRESENT
10-21 11:07:14.365 I/VSET/ObserveCameraStateService( 6368): onStartCommand : unihal 3.01
10-21 11:07:14.365 I/CameraManagerGlobal(18970): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.365 I/VSET/ObserveCameraStateService( 6368): initAppRepository is created already
10-21 11:07:14.365 I/CameraManagerGlobal( 4699): Camera 1 facing CAMERA_FACING_FRONT state now CAMERA_STATE_CLOSED for client ir.mouj API Level 2 User Id 0
10-21 11:07:14.365 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:14.365 I/CameraManagerGlobal( 4699): onCameraDeviceStateChangedLocked: post device state update
10-21 11:07:14.366 I/CameraFlashlight( 1449): deviceClosed: device 1 is closed
10-21 11:07:14.366 I/CameraService( 1449): disconnect: Disconnected client for camera 1 for PID 8100
10-21 11:07:14.366 D/cameraserver( 1449): FGS Logger Transaction failed
10-21 11:07:14.366 D/cameraserver( 1449): -129
10-21 11:07:14.366 D/CameraService( 1449): BasicClient::disconnect X
10-21 11:07:14.366 I/VSET/ObserveCameraStateService( 6368): onStartCommand: true
10-21 11:07:14.367 W/ir.mouj ( 8100): Long monitor contention with owner VideoCaptureCamera2_CameraThread (8427) at void android.hardware.camera2.impl.CameraDeviceImpl.close()(CameraDeviceImpl.java:1492) waiters=0 in void 
android.hardware.camera2.impl.CameraDeviceImpl.onDeviceError(int, android.hardware.camera2.impl.CaptureResultExtras) for 180ms
10-21 11:07:14.369 D/PackageManager( 1407): setEnabledSetting : userId = 0 packageName = com.samsung.android.vtcamerasettings cmp = com.samsung.android.vtcamerasettings.settings.SettingsActivity newState = 1 callingPackage = 
com.samsung.android.vtcamerasettings
10-21 11:07:14.371 D/ApplicationPolicy( 1407): getApplicationStateEnabled : pkg = com.samsung.android.vtcamerasettings userId : 0
10-21 11:07:14.374 D/ApplicationPolicy( 1407): getApplicationComponentState : pkg = com.samsung.android.vtcamerasettings userId : 0
10-21 11:07:14.376 I/VSET/ObserveCameraStateService( 6368): onStartCommand: update SALogging status
10-21 11:07:14.376 I/VSET/ObserveCameraStateService( 6368): processDeviceInjectorIntent: not supported device injector
10-21 11:07:14.376 E/ScreenDecorations( 2562): CutoutView not initialized hideCameraProtection
10-21 11:07:14.377 I/VSET/ObserveCameraStateService( 6368): updateAppInfoRepository: E 
10-21 11:07:14.377 I/VSET/ObserveCameraStateService( 6368): initAppRepository is created already
10-21 11:07:14.378 I/VSET/ObserveCameraStateService( 6368): requestStopService
10-21 11:07:16.520 D/CameraDeviceClient( 1449): ~CameraDeviceClient:stop IT Policy checking thread
10-21 11:07:16.520 D/CameraDeviceClient( 1449): ~CameraDeviceClient:stop IT Policy checking thread
10-21 11:07:16.521 I/Camera2ClientBase( 1449): Creating CameraServiceWatchDog for disconnect with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:16.521 I/Camera2ClientBase( 1449): Creating CameraServiceWatchDog for disconnect with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:16.522 D/CameraDeviceClient( 1449): ~CameraDeviceClient:stop IT Policy checking thread
10-21 11:07:16.522 I/Camera2ClientBase( 1449): Creating CameraServiceWatchDog for disconnect with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:16.522 I/Camera2ClientBase( 1449): CameraServiceWatchDog::watchThread for disconnect with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:16.522 D/Camera2ClientBase( 1449): Camera 1: start to disconnect
10-21 11:07:16.522 D/Camera2ClientBase( 1449): Camera 1: serializationLock acquired
10-21 11:07:16.522 D/Camera2ClientBase( 1449): Camera 1: Shutting down
10-21 11:07:16.522 I/Camera3-Device( 1449): disconnectImpl: E
10-21 11:07:16.522 D/Camera3-Device( 1449): disconnectImpl: mInterfaceLock.unlock()
10-21 11:07:16.522 I/Camera3-Device( 1449): setDeviceInjector
10-21 11:07:16.522 D/CameraService( 1449): BasicClient::disconnect E
10-21 11:07:16.522 D/CameraService( 1449): BasicClient::disconnect X - already disconnected
10-21 11:07:16.522 I/Camera2ClientBase( 1449): CameraServiceWatchDog::watchThread for disconnect with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:16.522 I/Camera2ClientBase( 1449): CameraServiceWatchDog::watchThread for disconnect with cycles=80, cycleLength=100ms, timer=8000ms
10-21 11:07:16.522 D/Camera2ClientBase( 1449): Camera 1: start to disconnect
10-21 11:07:16.522 D/Camera2ClientBase( 1449): Camera 1: serializationLock acquired
10-21 11:07:16.522 I/Camera2ClientBase( 1449): ~Camera2ClientBase: Client object's dtor for Camera Id 1 completed. Client was: ir.mouj (PID 8100, UID 10372)
10-21 11:07:16.522 D/Camera2ClientBase( 1449): Camera 1: Shutting down
10-21 11:07:16.522 D/Camera2ClientBase( 1449): Camera 1: start to disconnect
10-21 11:07:16.522 I/Camera3-Device( 1449): disconnectImpl: E
10-21 11:07:16.522 D/Camera3-Device( 1449): disconnectImpl: mInterfaceLock.unlock()
10-21 11:07:16.522 D/Camera2ClientBase( 1449): Camera 1: serializationLock acquired
10-21 11:07:16.522 I/Camera3-Device( 1449): setDeviceInjector
10-21 11:07:16.522 D/CameraService( 1449): BasicClient::disconnect E
10-21 11:07:16.522 D/CameraService( 1449): BasicClient::disconnect X - already disconnected
10-21 11:07:16.522 D/Camera2ClientBase( 1449): Camera 1: Shutting down
10-21 11:07:16.522 I/Camera3-Device( 1449): disconnectImpl: E
10-21 11:07:16.522 D/Camera3-Device( 1449): disconnectImpl: mInterfaceLock.unlock()
10-21 11:07:16.522 I/Camera3-Device( 1449): disconnectImpl: E
10-21 11:07:16.522 D/Camera3-Device( 1449): disconnectImpl: mInterfaceLock.unlock()
10-21 11:07:16.522 I/Camera3-Device( 1449): setDeviceInjector
10-21 11:07:16.522 D/ijt/Camera3-RequestInjector( 1449): RequestInjector[1] Mapper destroyed
10-21 11:07:16.522 I/Camera2ClientBase( 1449): ~Camera2ClientBase: Client object's dtor for Camera Id 1 completed. Client was: ir.mouj (PID 8100, UID 10372)
10-21 11:07:16.522 D/CameraService( 1449): BasicClient::disconnect E
10-21 11:07:16.522 I/Camera3DeviceInjectionMethods( 1449): injectionDisconnectImpl: Injection camera disconnect
10-21 11:07:16.522 I/Camera3-Device( 1449): disconnectImpl: E
10-21 11:07:16.522 D/Camera3-Device( 1449): disconnectImpl: mInterfaceLock.unlock()
10-21 11:07:16.522 D/ijt/Camera3-RequestInjector( 1449): RequestInjector[1] Mapper destroyed
10-21 11:07:16.522 I/Camera3DeviceInjectionMethods( 1449): injectionDisconnectImpl: Injection camera disconnect
10-21 11:07:16.522 D/CameraService( 1449): BasicClient::disconnect X - already disconnected
10-21 11:07:16.522 I/Camera2ClientBase( 1449): ~Camera2ClientBase: Client object's dtor for Camera Id 1 completed. Client was: ir.mouj (PID 8100, UID 10372)
10-21 11:07:16.523 I/Camera3-Device( 1449): disconnectImpl: E
10-21 11:07:16.523 D/Camera3-Device( 1449): disconnectImpl: mInterfaceLock.unlock()
10-21 11:07:16.523 D/ijt/Camera3-RequestInjector( 1449): RequestInjector[1] Mapper destroyed
10-21 11:07:16.524 I/Camera3DeviceInjectionMethods( 1449): injectionDisconnectImpl: Injection camera disconnect
PS D:\Mouj> 
