<?php

/*
+---------------------------------------------------------------------------+
| OpenX v2.8                                                                |
| ==========                                                                |
|                                                                           |
| Copyright (c) 2003-2009 OpenX Limited                                     |
| For contact details, see: http://www.openx.org/                           |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id:default.lang.php 20042 2008-05-09 01:10:00Z aj.tarachanowicz@openx.org $
*/

// Set text direction and characterset
$GLOBALS['phpAds_TextDirection']        = "ltr";
$GLOBALS['phpAds_TextAlignRight']       = "right";
$GLOBALS['phpAds_TextAlignLeft']        = "left";
$GLOBALS['phpAds_CharSet']              = "UTF-8";

$GLOBALS['phpAds_DecimalPoint']         = ".";
$GLOBALS['phpAds_ThousandsSeperator']   = ",";

// Date & time configuration
$GLOBALS['date_format']                 = "%Y-%m-%d";
$GLOBALS['time_format']                 = "%H:%M:%S";
$GLOBALS['minute_format']               = "%H:%M";
$GLOBALS['month_format']                = "%Y-%m";
$GLOBALS['day_format']                  = "%d-%m";
$GLOBALS['week_format']                 = "%Y-%W";
$GLOBALS['weekiso_format']              = "%V-%G";

// Formats used by PEAR Spreadsheet_Excel_Writer packate
$GLOBALS['excel_integer_formatting']    = "#,##0;-#,##0;-";
$GLOBALS['excel_decimal_formatting']    = "#,##0.000;-#,##0.000;-";

/*-------------------------------------------------------*/
/* Translations                                          */
/*-------------------------------------------------------*/

$GLOBALS['strHome']                     = "首页";
$GLOBALS['strHelp']                     = "帮助";
$GLOBALS['strContactUs']                = "联系我们";
$GLOBALS['strStartOver']                = "重新开始";
$GLOBALS['strNavigation']               = "导航";
$GLOBALS['strShortcuts']                = "快捷方式";
$GLOBALS['strActions']                  = "操作";
$GLOBALS['strMore']                     = "更多";
$GLOBALS['strAndXMore']                 = "and %s more";
$GLOBALS['strLess']                     = "更少";
$GLOBALS['strAdminstration']            = "管理";
$GLOBALS['strMaintenance']              = "维护";
$GLOBALS['strProbability']              = "权重";
$GLOBALS['strInvocationcode']           = "生成代码";
$GLOBALS['strTrackerVariables']         = "变量";
$GLOBALS['strBasicInformation']         = "基本信息";
$GLOBALS['strAdditionalInformation']    = "详细信息";
$GLOBALS['strContractInformation']      = "合同信息";
$GLOBALS['strLoginInformation']         = "登录信息";
$GLOBALS['strLogoutURL']                = "注销后自动跳转地址。<br />留空则跳转到默认地址。";
$GLOBALS['strAppendTrackerCode']        = "附加追踪器代码";
$GLOBALS['strOverview']                 = "Overview";
$GLOBALS['strSearch']                   = "搜索（<u>s</u>）";
$GLOBALS['strHistory']                  = "历史";
$GLOBALS['strDetails']                  = "详细";
$GLOBALS['strUpdateSettings']           = "升级";
$GLOBALS['strCheckForUpdates']          = "检查新版本";
$GLOBALS['strWhenCheckingForUpdates']   = "检查新版本时";
$GLOBALS['strCompact']                  = "Compact";
$GLOBALS['strVerbose']                  = "Verbose";
$GLOBALS['strUser']                     = "User";
$GLOBALS['strEdit']                     = "Edit";
$GLOBALS['strCreate']                   = "Create";
$GLOBALS['strDuplicate']                = "克隆";
$GLOBALS['strCopyOf']                   = "副本";
$GLOBALS['strMoveTo']                   = "移至";
$GLOBALS['strDelete']                   = "删除";
$GLOBALS['strActivate']                 = "启用";
$GLOBALS['strDeActivate']               = "停用";
$GLOBALS['strDeactivate']               = "停用";
$GLOBALS['strConvert']                  = "Convert";
$GLOBALS['strRefresh']                  = "刷新";
$GLOBALS['strSaveChanges']              = "保存";
$GLOBALS['strUp']                       = "Up";
$GLOBALS['strDown']                     = "Down";
$GLOBALS['strSave']                     = "Save";
$GLOBALS['strCancel']                   = "Cancel";
$GLOBALS['strBack']                     = "返回";
$GLOBALS['strPrevious']                 = "Previous";
$GLOBALS['strPrevious_Key']             = "<u>P</u>revious";
$GLOBALS['strNext']                     = "Next";
$GLOBALS['strNext_Key']                 = "<u>N</u>ext";
$GLOBALS['strYes']                      = "是";
$GLOBALS['strNo']                       = "否";
$GLOBALS['strNone']                     = "None";
$GLOBALS['strCustom']                   = "自定义";
$GLOBALS['strDefault']                  = "默认";
$GLOBALS['strOther']                    = "Other";
$GLOBALS['strUnknown']                  = "Unknown";
$GLOBALS['strUnlimited']                = "无限制";
$GLOBALS['strUntitled']                 = "未命名";
$GLOBALS['strAll']                      = "all";
$GLOBALS['strAvg']                      = "Avg.";
$GLOBALS['strAverage']                  = "Average";
$GLOBALS['strAveraged']                 = "Averaged";
$GLOBALS['strAveragedColumnLegend']		= "This icon indicates that the values in this row are averaged.<br> There are situations where more than a single set of targeting data may have been generated for an hour. <br/> <ul><li> For example, if you run OpenX with an Operation Interval of less than 60 minutes (see \"Maintenance Settings\"), the targeting information for Contract Campaigns is calculated at every Operation Interval, and is then averaged to get the hour data.  </li><li>This can also happen in the case where you have enabled the option to update ads priorities when changes are made in the UI (see Priority Settings in the \"Maintenance Settings\" menu) and you have made changes to the Contract Campaigns while they are running.</li></ul>";
$GLOBALS['strOverall']                  = "总计";
$GLOBALS['strTotal']                    = "总计";
$GLOBALS['strUnfilteredTotal']          = "Total (unfiltered)";
$GLOBALS['strFilteredTotal']            = "Total (filtered)";
$GLOBALS['strActive']                   = "active";
$GLOBALS['strFrom']                     = "From";
$GLOBALS['strTo']                       = "到";
$GLOBALS['strAdd']                      = "添加";
$GLOBALS['strLinkedTo']                 = "linked to";
$GLOBALS['strDaysLeft']                 = "Days left";
$GLOBALS['strCheckAllNone']             = "全选";
$GLOBALS['strKiloByte']                 = "KB";
$GLOBALS['strExpandAll']                = "展开（<u>E</u>）";
$GLOBALS['strCollapseAll']              = "折叠（<u>C</u>）";
$GLOBALS['strShowAll']                  = "显示所有";
$GLOBALS['strNoAdminInterface']         = "The admin screen has been turned off for maintenance.  This does not affect the delivery of your campaigns.";
$GLOBALS['strFilterBySource']           = "filter by source";
$GLOBALS['strFieldStartDateBeforeEnd']  = "'From' date must be earlier then 'To' date";
$GLOBALS['strFieldContainsErrors']      = "The following fields contain errors:";
$GLOBALS['strFieldFixBeforeContinue1']  = "Before you can continue you need";
$GLOBALS['strFieldFixBeforeContinue2']  = "to correct these errors.";
$GLOBALS['strDelimiter']                = "Delimiter";
$GLOBALS['strMiscellaneous']            = "杂项";
$GLOBALS['strCollectedAllStats']        = "所有";
$GLOBALS['strCollectedToday']           = "今天";
$GLOBALS['strCollectedYesterday']       = "昨天";
$GLOBALS['strCollectedThisWeek']        = "本周";
$GLOBALS['strCollectedLastWeek']        = "上周";
$GLOBALS['strCollectedThisMonth']       = "本月";
$GLOBALS['strCollectedLastMonth']       = "上月";
$GLOBALS['strCollectedLast7Days']       = "过去 7 天";
$GLOBALS['strCollectedSpecificDates']   = "自定义";
$GLOBALS['strDifference']               = "Difference (%)";
$GLOBALS['strPercentageOfTotal']        = "% Total";
$GLOBALS['strValue']                    = "Value";
$GLOBALS['strAdmin']                    = "Admin";
$GLOBALS['strWarning']                  = "Warning";
$GLOBALS['strNotice']                   = "Notice";
$GLOBALS['strRequiredField']            = "Required field";
$GLOBALS['strCloseWindow']              = "Close window";

// Dashboard
$GLOBALS['strDashboardCommunity']       = "OpenX 社区";
$GLOBALS['strDashboardDashboard']       = "Dashboard";
$GLOBALS['strDashboardForum']           = "OpenX 论坛";
$GLOBALS['strDashboardDocs']            = "OpenX 文档";
$GLOBALS['strDashboardCantBeDisplayed'] = "The dashboard can not be displayed";
$GLOBALS['strNoCheckForUpdates']        = "The dashboard cannot be displayed unless the<br />check for updates setting is enabled.";
$GLOBALS['strEnableCheckForUpdates']    = "Please enable the <a href='account-settings-update.php' target='_top'>check for updates</a> setting on the<br/><a href='account-settings-update.php' target='_top'>update settings</a> page.";
$GLOBALS['strChoosenDisableHomePage']   = "You have choosen to disable your Home page.";
$GLOBALS['strAccessHomePage']           = "Click here to access your Home page";
$GLOBALS['strEditSyncSettings']         = "and edit your synchronization settings";
// Dashboard Errors
$GLOBALS['strDashboardErrorCode']       = "code";
$GLOBALS['strDashboardGenericError']    = "Generic error";
$GLOBALS['strDashboardSystemMessage']   = "System message";
$GLOBALS['strDashboardErrorHelp']       = "If this error repeats please describe your problem in detail and post it on the <a href='http://forum.openx.org/'>OpenX forum</a>.";
$GLOBALS['strDashboardErrorMsg800']     = "XML-RPC connection error";
$GLOBALS['strDashboardErrorMsg801']     = "Not authenticated";
$GLOBALS['strDashboardErrorMsg802']     = "CAPTCHA failed";
$GLOBALS['strDashboardErrorMsg803']     = "Wrong parameters";
$GLOBALS['strDashboardErrorMsg804']     = "User name does not match platform";
$GLOBALS['strDashboardErrorMsg805']     = "Platform does not exist";
$GLOBALS['strDashboardErrorMsg806']     = "Server error";
$GLOBALS['strDashboardErrorMsg807']     = "Not authorised";
$GLOBALS['strDashboardErrorMsg808']     = "XML-RPC version not supported";
$GLOBALS['strDashboardErrorMsg900']     = "Transport error code";
$GLOBALS['strDashboardErrorMsg821']     = "M2M authentication error - account type not allowed";
$GLOBALS['strDashboardErrorMsg822']     = "M2M authentication error - password already generated";
$GLOBALS['strDashboardErrorMsg823']     = "M2M authentication error - password invalid";
$GLOBALS['strDashboardErrorMsg824']     = "M2M authentication error - password expired";
$GLOBALS['strDashboardErrorMsg825']     = "M2M authentication error - cannot connect";
$GLOBALS['strDashboardErrorMsg826']     = "M2M authentication error - cannot reconnect";

$GLOBALS['strDashboardErrorDsc800']     = "The dashboard pulls information from a central server for some widgets. There are several things which can affect this.<br />
                                           Your server may not have the the Curl extension enabled. You may need to install or enable the Curl extension, see <a href='http://php.net/curl'>here</a> for more details.<br />
                                           You should also check that your firewall isn't blocking outbound connections.";
$GLOBALS['strDashboardErrorDsc803']     = "Error in request to server - wrong parameters, please try to resend your data";
$GLOBALS['strDashboardErrorDsc805']     = "XML-RPC connection wasn't allowed during OpenX installation and OpenX central server does not recognize your OpenX installation as valid.<br />
                                           Please go to Administrator's account My account -> Product Updates to connect to and register in central server.";

// Priority
$GLOBALS['strPriority']                 = "优先级";
$GLOBALS['strPriorityLevel']            = "优先级";
$GLOBALS['strPriorityTargeting']        = "Distribution";
$GLOBALS['strPriorityOptimisation']     = "Miscellaneous"; // Er, what?
$GLOBALS['strExclusiveAds']             = "Exclusive Contract Advertisements";
$GLOBALS['strHighAds']                  = "Contract Advertisements";
$GLOBALS['strECPMAds']                  = "eCPM Advertisements";
$GLOBALS['strLowAds']                   = "普通项目";
$GLOBALS['strLimitations']              = "投放控制";
$GLOBALS['strNoLimitations']            = "无";
$GLOBALS['strCapping']                  = "Capping";
$GLOBALS['strCapped']                   = "Capped";
$GLOBALS['strNoCapping']                = "No capping";

// Properties
$GLOBALS['strName']                     = "名称";
$GLOBALS['strSize']                     = "规格";
$GLOBALS['strWidth']                    = "宽";
$GLOBALS['strHeight']                   = "高";
$GLOBALS['strURL2']                     = "URL";
$GLOBALS['strTarget']                   = "目标窗口";
$GLOBALS['strLanguage']                 = "语言";
$GLOBALS['strDescription']              = "详细描述";
$GLOBALS['strVariables']                = "变量";
$GLOBALS['strID']                       = "ID";
$GLOBALS['strComments']                 = "详细描述";

// User access
$GLOBALS['strWorkingAs']                = "用户组";
$GLOBALS['strWorkingAs_Key']            = "用户组（<u>w</u>）";
$GLOBALS['strWorkingAs']                = "用户组";
$GLOBALS['strSwitchTo']                 = "切换到";
$GLOBALS['strUseSearchBoxToFindMoreAccounts'] = "Use the switcher's search box to find more accounts";
$GLOBALS['strWorkingFor']               = "%s 账户";
$GLOBALS['strNoAccountWithXInNameFound']= "No accounts with \"%s\" in name found";
$GLOBALS['strRecentlyUsed']             = "Recently used";
$GLOBALS['strLinkUser']                 = "添加";
$GLOBALS['strLinkUser_Key']             = "添加新的用户（<u>u</u>）";
$GLOBALS['strUsernameToLink']           = "用户名";
$GLOBALS['strEmailToLink']              = "Email of user to add";
$GLOBALS['strNewUserWillBeCreated']     = "正在添加新的用户";
$GLOBALS['strToLinkProvideEmail']       = "请输入 Email";
$GLOBALS['strToLinkProvideUsername']    = "请输入用户名";
$GLOBALS['strErrorWhileCreatingUser']   = "添加新用户时发生错误：%s";
$GLOBALS['strUserLinkedToAccount']      = "用户已经成功添加到该用户组。";
$GLOBALS['strUserAccountUpdated']       = "用户已经成功更新。";
$GLOBALS['strUserUnlinkedFromAccount']  = "用户已经成功从该用户组删除。";
$GLOBALS['strUserWasDeleted']           = "用户已经彻底删除。";
$GLOBALS['strUserNotLinkedWithAccount'] = "Such user is not linked with account";
$GLOBALS['strCantDeleteOneAdminUser']   = "You can't delete a user. At least one user needs to be linked with admin account.";
$GLOBALS['strLinkUserHelp']             = "请输入%s，然后按{$GLOBALS['strLinkUser']}按钮" ;
$GLOBALS['strLinkUserHelpUser']         = "用户名";
$GLOBALS['strLinkUserHelpEmail']        = "Email";
$GLOBALS['strLastLoggedIn']             = "Last logged in";
$GLOBALS['strDateLinked']               = "添加日期";
$GLOBALS['strUnlink']                   = "从用户组删除";
$GLOBALS['strUnlinkingFromLastEntity']  = "正在删除用户";
$GLOBALS['strUnlinkingFromLastEntityBody']  = "这是该用户所属的唯一用户组，从该组中删除将会彻底删除该用户。您真的要从用户组中删除该用户吗？";
$GLOBALS['strUnlinkAndDelete']          = "Remove &amp; delete user";
$GLOBALS['strUnlinkUser']               = "Remove user";
$GLOBALS['strUnlinkUserConfirmBody']    = "您确定要从用户组中删除该用户吗？";

// Login & Permissions
$GLOBALS['strUserAccess']               = "访问权限";
$GLOBALS['strAdminAccess']              = "管理员权限";
$GLOBALS['strUserProperties']           = "用户";
$GLOBALS['strLinkNewUser']              = "Link New User";
$GLOBALS['strPermissions']              = "权限";
$GLOBALS['strAuthentification']         = "身份验证";
$GLOBALS['strWelcomeTo']                = "欢迎使用";
$GLOBALS['strEnterUsername']            = "请输入您的用户名和密码";
$GLOBALS['strEnterBoth']                = "Please enter both your username and password";
$GLOBALS['strEnableCookies']            = "You need to enable cookies before you can use ".MAX_PRODUCT_NAME;
$GLOBALS['strSessionIDNotMatch']        = "Session cookie error, please log in again";
$GLOBALS['strLogin']                    = "登录";
$GLOBALS['strLogout']                   = "注销";
$GLOBALS['strUsername']                 = "用户名";
$GLOBALS['strPassword']                 = "密码";
$GLOBALS['strPasswordRepeat']           = "密码确认";
$GLOBALS['strAccessDenied']             = "访问被拒绝";
$GLOBALS['strUsernameOrPasswordWrong']  = "The username and/or password were not correct. Please try again.";
$GLOBALS['strPasswordWrong']            = "The password is not correct";
$GLOBALS['strParametersWrong']          = "The parameters you supplied are not correct";
$GLOBALS['strNotAdmin']                 = "Your account does not have the required permissions to use this feature, you can log into another account to use it.";
$GLOBALS['strDuplicateClientName']      = "The username you provided already exists, please use a different username.";
$GLOBALS['strDuplicateAgencyName']      = "The username you provided already exists, please use a different username.";
$GLOBALS['strInvalidPassword']          = "The new password is invalid, please use a different password.";
$GLOBALS['strInvalidEmail']             = "The email is not correctly formatted, please put a correct email address.";
$GLOBALS['strNotSamePasswords']         = "The two passwords you supplied are not the same";
$GLOBALS['strRepeatPassword']           = "Repeat Password";
$GLOBALS['strOldPassword']              = "Old Password";
$GLOBALS['strNewPassword']              = "New Password";
$GLOBALS['strNoBannerId']               = "No banner ID";
$GLOBALS['strDeadLink']                 = "Your link is invalid.";
$GLOBALS['strNoPlacement']              = "Selected campaign does not exist. Try this <a href='{link}'>link</a> instead";
$GLOBALS['strNoAdvertiser']             = "Selected advertiser does not exist. Try this <a href='{link}'>link</a> instead";

// General advertising
$GLOBALS['strRequests']                 = "投放请求";
$GLOBALS['strImpressions']              = "素材展示";
$GLOBALS['strClicks']                   = "素材点击";
$GLOBALS['strConversions']              = "数据追踪";
$GLOBALS['strCTRShort']                 = "CTR";
$GLOBALS['strCTRShortHigh']             = "CTR for High";
$GLOBALS['strCTRShortLow']              = "CTR for Low";
$GLOBALS['strCNVRShort']                = "SR";
$GLOBALS['strCTR']                      = "点击率";
$GLOBALS['strCNVR']                     = "Sales Ratio";
$GLOBALS['strCPC']                      = "Cost Per Click";
$GLOBALS['strCPCo']                     = "Cost Per Conversion";
$GLOBALS['strCPCoShort']                = "CPCo";
$GLOBALS['strCPCShort']                 = "CPC";
$GLOBALS['strTotalViews']               = "Total Impressions";
$GLOBALS['strTotalClicks']              = "Total Clicks";
$GLOBALS['strTotalConversions']         = "Total Conversions";
$GLOBALS['strViewCredits']              = "Impression Credits";
$GLOBALS['strClickCredits']             = "Click Credits";
$GLOBALS['strConversionCredits']        = "Conversion Credits";
$GLOBALS['strImportStats']              = "Import Statistics";
$GLOBALS['strDateTime']                 = "Date Time";
$GLOBALS['strTrackerID']                = "Tracker ID";
$GLOBALS['strTrackerName']              = "Tracker Name";
$GLOBALS['strTrackerImageTag']          = "Image 标签";
$GLOBALS['strTrackerJsTag']             = "Javascript 标签";
$GLOBALS['strTrackerAlwaysAppend']      = "Always display appended code, even if no conversion is recorded by the tracker?";
$GLOBALS['strBanners']                  = "Banners";
$GLOBALS['strCampaigns']                = "项目";
$GLOBALS['strCampaignID']               = "项目 ID";
$GLOBALS['strCampaignName']             = "项目名称";
$GLOBALS['strCountry']                  = "国家";
$GLOBALS['strStatsAction']              = "Action";
$GLOBALS['strWindowDelay']              = "Window delay";
$GLOBALS['strStatsVariables']           = "Variables";

// Finance
$GLOBALS['strFinanceCPM']               = "CPM";
$GLOBALS['strFinanceCPC']               = "CPC";
$GLOBALS['strFinanceCPA']               = "CPA";
$GLOBALS['strFinanceMT']                = "包月";
$GLOBALS['strFinanceCTR']               = "CTR";
$GLOBALS['strFinanceCR']                = "CR";
$GLOBALS['strPercentRevenueSplit']      = "% Revenue split";
$GLOBALS['strPercentBasketValue']       = "% Basket value";
$GLOBALS['strAmountPerItem']            = "Amount per item";
$GLOBALS['strPercentCustomVariable']    = "% Custom variable";
$GLOBALS['strPercentSumVariables']      = "% Sum of variables";

// Time and date related
$GLOBALS['strDate']                     = "日期";
$GLOBALS['strToday']                    = "今天";
$GLOBALS['strDay']                      = "日期";
$GLOBALS['strDays']                     = "天";
$GLOBALS['strLast7Days']                = "过去 7 天";
$GLOBALS['strWeek']                     = "周";
$GLOBALS['strWeeks']                    = "周";
$GLOBALS['strSingleMonth']              = "个月";
$GLOBALS['strMonths']                   = "个月";
$GLOBALS['strDayOfWeek']                = "星期";
$GLOBALS['strThisMonth']                = "本月";
$GLOBALS['strMonth']                    = array("一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月");
$GLOBALS['strDayFullNames']             = array('星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六');
$GLOBALS['strDayShortCuts']             = array("日","一","二","三","四","五","六");
$GLOBALS['strHour']                     = "小时";
$GLOBALS['strHourFilter']               = "Hour Filter";
$GLOBALS['strSeconds']                  = "秒";
$GLOBALS['strMinutes']                  = "分钟";
$GLOBALS['strHours']                    = "小时";
$GLOBALS['strTimes']                    = "次";

// Advertiser
$GLOBALS['strClient']                       = "客户";
$GLOBALS['strClients']                      = "客户";
$GLOBALS['strClientsAndCampaigns']          = "按客户与项目";
$GLOBALS['strAddClient']                    = "添加新的客户";
$GLOBALS['strAddClient_Key']                = "添加新的客户（<u>n</u>）";
$GLOBALS['strTotalClients']                 = "客户总数";
$GLOBALS['strClientProperties']             = "客户";
$GLOBALS['strClientHistory']                = "投放记录";
$GLOBALS['strNoClients']                    = "您还没有添加客户。在添加新的项目前，您需要先<a href='advertiser-edit.php'>添加客户</a>。";
$GLOBALS['strNoClientsForBanners']          = "您还没有添加客户。在添加新的素材前，您需要先<a href='advertiser-edit.php'>添加客户</a>和项目。";
$GLOBALS['strConfirmDeleteClient']          = "您真的要删除这个客户吗？";
$GLOBALS['strConfirmDeleteClients']         = "您真的要删除所有选中的客户吗？";
$GLOBALS['strConfirmResetClientStats']      = "您真的要删除这个客户所有的投放记录吗？";
$GLOBALS['strSite']                         = "Site";
$GLOBALS['strHideInactive']                 = "隐藏没有投放记录的行";
$GLOBALS['strHideInactiveAdvertisers']      = "Hide inactive advertisers";
$GLOBALS['strInactiveAdvertisersHidden']    = "个没有投放记录的客户已被隐藏";
$GLOBALS['strOverallAdvertisers']           = "advertiser(s)";
$GLOBALS['strAdvertiserSignup']             = "Advertiser Sign Up";
$GLOBALS['strAdvertiserSignupDesc']         = "Sign up for Advertiser self service and Payment";
$GLOBALS['strAdvertiserSignupLink']         = "Advertiser Sign Up link";
$GLOBALS['strAdvertiserSignupLinkDesc']     = "To add an Advertiser Sign Up link to your site, please copy the HTML below:";
$GLOBALS['strAdvertiserSignupOption']       = "Advertiser Sign Up option";
$GLOBALS['strAdvertiserSignunOptionDesc']   = "To edit your Advertiser Sign Up options, follow to";
$GLOBALS['strAdvertiserCampaigns']          = "查看项目列表";
// Advertisers properties
$GLOBALS['strContact']                          = "联系人";
$GLOBALS['strContactName']                      = "姓名";
$GLOBALS['strEMail']                            = "Email";
$GLOBALS['strChars']                            = "chars";
$GLOBALS['strSendAdvertisingReport']            = "通过 Email 发送项目报表";
$GLOBALS['strNoDaysBetweenReports']             = "项目报表发送周期（天）";
$GLOBALS['strSendDeactivationWarning']          = "当系统自动启用或停用项目投放时通过 Email 发送通知";
$GLOBALS['strAllowClientModifyInfo']            = "修改个人信息";
$GLOBALS['strAllowClientModifyBanner']          = "修改素材";
$GLOBALS['strAllowClientAddBanner']             = "添加新的素材";
$GLOBALS['strAllowClientDisableBanner']         = "停用素材";
$GLOBALS['strAllowClientActivateBanner']        = "启用素材";
$GLOBALS['strAllowClientViewTargetingStats']    = "Allow this user to view targeting statistics";
$GLOBALS['strAllowCreateAccounts']              = "添加新的用户";
$GLOBALS['strCsvImportConversions']             = "Allow this user to import offline conversions";
$GLOBALS['strAdvertiserLimitation']             = "禁止在同一个页面上重复投放属于该客户的素材";
$GLOBALS['strAllowAuditTrailAccess']            = "查看日志";

// Campaign
$GLOBALS['strCampaign']                     = "项目";
$GLOBALS['strCampaigns']                    = "项目";
$GLOBALS['strOverallCampaigns']             = "campaign(s)";
$GLOBALS['strTotalCampaigns']               = "Total campaigns";
$GLOBALS['strActiveCampaigns']              = "已启用的项目";
$GLOBALS['strAddCampaign']                  = "添加新的项目";
$GLOBALS['strAddCampaign_Key']              = "添加新的项目（<u>n</u>）";
$GLOBALS['strCampaignForAdvertiser']        = "到";
$GLOBALS['strCreateNewCampaign']            = "Create new campaign";
$GLOBALS['strModifyCampaign']               = "Modify campaign";
$GLOBALS['strMoveToNewCampaign']            = "Move to a new campaign";
$GLOBALS['strBannersWithoutCampaign']       = "Banners without a campaign";
$GLOBALS['strDeleteAllCampaigns']           = "Delete all campaigns";
$GLOBALS['strLinkedCampaigns']              = "项目关联";
$GLOBALS['strCampaignStats']                = "Campaign Statistics";
$GLOBALS['strCampaignProperties']           = "项目";
$GLOBALS['strCampaignOverview']             = "Campaign Overview";
$GLOBALS['strCampaignHistory']              = "投放记录";
$GLOBALS['strNoCampaigns']                  = "您还没有为该客户添加项目。";
$GLOBALS['strNoCampaignsAddAdvertiser']     = "您还没有添加项目。在添加新的项目前，您需要先<a href='advertiser-edit.php'>添加客户</a>。";
$GLOBALS['strNoCampaignsForBanners']        = "您还没有为该客户添加项目。在添加新的素材前，您需要先<a href='campaign-edit.php?clientid=%s'>添加项目</a>。";
$GLOBALS['strConfirmDeleteAllCampaigns']    = "您真的要删除该客户所有的项目吗？";
$GLOBALS['strConfirmDeleteCampaign']        = "您真的要删除该项目吗？";
$GLOBALS['strConfirmDeleteCampaigns']       = "您真的要删除所有选中的项目吗？";
$GLOBALS['strConfirmResetCampaignStats']    = "您真的要删除该项目所有的投放记录吗？";
$GLOBALS['strShowParentAdvertisers']        = "显示项目所属的客户";
$GLOBALS['strHideParentAdvertisers']        = "隐藏项目所属的客户";
$GLOBALS['strHideInactiveCampaigns']        = "隐藏未启用的项目";
$GLOBALS['strInactiveCampaignsHidden']      = "个未启用的项目已被隐藏";
$GLOBALS['strContractDetails']              = "Contract details";
$GLOBALS['strInventoryDetails']             = "Inventory details";
$GLOBALS['strPriorityInformation']          = "权重";
$GLOBALS['strImpressionGoal']               = "Impression Goal";
$GLOBALS['strECPMInformation']              = "eCPM 优先级";
$GLOBALS['strRemnantEcpmDescription']       = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise Remnant campaigns relative to each other.";
$GLOBALS['strContractEcpmDescription']      = "eCPM is automatically calculated based on this campaign's performance.<br />It will be used to prioritise campaigns with priority levels %s through %s.";
$GLOBALS['strEcpmMinImpsDescription']       = "Set this to your desired minium basis on which to calculate this campaign's eCPM.";
$GLOBALS['strPriorityExclusive']            = "Overrides other non-exclusive campaigns";
$GLOBALS['strPriorityHigh']                 = "- Paid campaigns";
$GLOBALS['strPriorityLow']                  = "- House and unpaid campaigns";
$GLOBALS['strPriorityHighShort']            = "高";
$GLOBALS['strPriorityLowShort']             = "低";
$GLOBALS['strHiddenCampaign']               = "Campaign";
$GLOBALS['strHiddenAd']                     = "Advertisement";
$GLOBALS['strHiddenAdvertiser']             = "Advertiser";
$GLOBALS['strHiddenTracker']                = "Tracker";
$GLOBALS['strHiddenWebsite']              = "Website";
$GLOBALS['strHiddenZone']                   = "Zone";
$GLOBALS['strUnderdeliveringCampaigns']     = "Underdelivering Campaigns";
$GLOBALS['strCampaignDelivery']             = "Campaign delivery";
$GLOBALS['strBookedMetric']                 = "Booked Metric";
$GLOBALS['strValueBooked']                  = "Value Booked";
$GLOBALS['strRemaining']                    = "Remaining";
$GLOBALS['strCompanionPositioning']         = "尝试在同一页面集中投放该项目的素材";
$GLOBALS['strSelectUnselectAll']            = "全选";
$GLOBALS['strConfirmOverwrite']             = "Saving these changes will overwrite any individual banner-zone links. Are you sure?";
$GLOBALS['strCampaignsOfAdvertiser']        = "属于"; //this is added between page name and advertiser name eg. 'Campaigns of Advertiser 1'
$GLOBALS['strShowCappedNoCookie']           = "对不支持 cookie 的用户忽略投放控制";

// Campaign-zone linking page
$GLOBALS['strCalculatedForAllCampaigns']    = "所有项目";
$GLOBALS['strCalculatedForThisCampaign']    = "仅该项目";
$GLOBALS['strLinkingZonesProblem']          = "Problem occured when linking zones";
$GLOBALS['strUnlinkingZonesProblem']        = "Problem occured when unlinking zones";
$GLOBALS['strZonesLinked']                  = "个版位已经成功关联";
$GLOBALS['strZonesUnlinked']                = "个版位已经成功解除关联";
$GLOBALS['strZonesSearch']                  = "搜索";
$GLOBALS['strZonesSearchTitle']             = "按名称搜索媒体或版位";
$GLOBALS['strNoWebsitesAndZones']           = "没有媒体或版位";
$GLOBALS['strNoWebsitesAndZonesCategory']   = "in category";
$GLOBALS['strNoWebsitesAndZonesText']       = "with \"%s\" in name";
$GLOBALS['strToLink']                       = "可以关联";
$GLOBALS['strToUnlink']                     = "可以解除关联";
$GLOBALS['strLinked']                       = "关联";
$GLOBALS['strAvailable']                    = "可用";
$GLOBALS['strShowing']                      = "显示";
$GLOBALS['strAllCategories']                = "所有分类";
$GLOBALS['strUncategorized']                = "未分类";
$GLOBALS['strEditZone']                     = "Edit zone";
$GLOBALS['strEditWebsite']                  = "Edit website";


// Campaign properties
$GLOBALS['strDontExpire']                = "长期投放";
$GLOBALS['strActivateNow']               = "立即启用";
$GLOBALS['strSetSpecificDate']           = "指定日期";
$GLOBALS['strLow']                        = "低";
$GLOBALS['strHigh']                        = "高";
$GLOBALS['strExclusive']                = "Exclusive";
$GLOBALS['strExpirationDate']            = "停用日期";
$GLOBALS['strExpirationDateComment']    = "指定该项目投放周期的最后一天";
$GLOBALS['strActivationDate']            = "启用日期";
$GLOBALS['strActivationDateComment']    = "指定该项目投放周期的第一天";
$GLOBALS['strRevenueInfo']              = "Revenue Information";
$GLOBALS['strTotalRevenue']             = "Total Revenue";
$GLOBALS['strImpressionsRemaining']     = "Impressions Remaining";
$GLOBALS['strClicksRemaining']             = "Clicks Remaining";
$GLOBALS['strConversionsRemaining']     = "Conversions Remaining";
$GLOBALS['strImpressionsBooked']         = "素材展示上限";
$GLOBALS['strClicksBooked']             = "素材点击上限";
$GLOBALS['strConversionsBooked']         = "数据追踪上限";
$GLOBALS['strCampaignWeight']              = "权重";
$GLOBALS['strTargetLimitAdImpressions'] = "Target Limit Ad Impressions";
$GLOBALS['strOptimise']                    = "Optimise delivery of this campaign.";
$GLOBALS['strAnonymous']                = "隐藏该项目的客户以及该项目关联的媒体";
$GLOBALS['strHighPriority']                = "Show banners in this campaign with high priority.<br />If you use this option ".MAX_PRODUCT_NAME." will try to distribute the number of Impressions evenly over the course of the day.";
$GLOBALS['strLowPriority']                = "Show banner in this campaign with low priority.<br /> This campaign is used to show the left over Impressions which aren't used by high priority campaigns.";
$GLOBALS['strTargetPerDay']                = " / 天";
$GLOBALS['strTargetLimitImpressionsTo']   = "Limit impressions to";
$GLOBALS['strPriorityAutoTargeting']      = "Automatic - Distribute the remaining inventory evenly over the remaining number of days.";
$GLOBALS['strCampaignWarningRemnantNoWeight']   = "The type of this campaign has been set to Remnant, \nbut the weight is set to zero or it has not been \nspecified. This will cause the campaign to be \ndeactivated and its banners won't be delivered \nuntil the weight has been set to a valid number. \n\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningEcpmNoRevenue']   = "This campaign uses eCPM optimisation \nbut the 'revenue' is set to zero or it has not been specified. \nThis will cause the campaign to be deactivated \nand its banners won't be delivered until the \nrevenue has been set to a valid number. \n\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningExclusiveNoWeight'] = "The type of this campaign has been set to Exclusive, \nbut the weight is set to zero or it has not been \nspecified. This will cause the campaign to be \ndeactivated and its banners won't be delivered \nuntil the weight has been set to a valid number. \n\nAre you sure you want to continue?";
$GLOBALS['strCampaignWarningNoTarget']     = "The type of this campaign has been set to Contract, \nbut Limit per day is not specified. \nThis will cause the campaign to be deactivated and \nits banners won't be delivered until a valid Limit per day has been set. \n\nAre you sure you want to continue?";
$GLOBALS['strCampaignStatusPending']       = "Pending";
$GLOBALS['strCampaignStatusInactive']      = "已停用";
$GLOBALS['strCampaignStatusRunning']       = "正在投放";
$GLOBALS['strCampaignStatusPaused']        = "已暂停";
$GLOBALS['strCampaignStatusAwaiting']      = "即将启用";
$GLOBALS['strCampaignStatusExpired']       = "已过期";
$GLOBALS['strCampaignStatusApproval']      = "Awaiting approval »";
$GLOBALS['strCampaignStatusRejected']      = "Rejected";
$GLOBALS['strCampaignStatusAdded']         = "已添加";
$GLOBALS['strCampaignStatusStarted']       = "已启用";
$GLOBALS['strCampaignStatusRestarted']     = "已重新启用";
$GLOBALS['strCampaignStatusDeleted']       = "已删除";
$GLOBALS['strCampaignApprove']             = "Approve";
$GLOBALS['strCampaignApproveDescription']  = "accept this campaign";
$GLOBALS['strCampaignReject']              = "Reject";
$GLOBALS['strCampaignRejectDescription']   = "reject this campaign";
$GLOBALS['strCampaignPause']               = "Pause";
$GLOBALS['strCampaignPauseDescription']    = "pause this campaign temporarily";
$GLOBALS['strCampaignRestart']             = "Resume";
$GLOBALS['strCampaignRestartDescription']  = "resume this campaign";
$GLOBALS['strCampaignStatus']              = "Campaign status";
$GLOBALS['strReasonForRejection']          = "Reason for rejection";
$GLOBALS['strReasonSiteNotLive']           = "Site not live";
$GLOBALS['strReasonBadCreative']           = "Inappropriate creative";
$GLOBALS['strReasonBadUrl']                = "Inappropriate destination url";
$GLOBALS['strReasonBreakTerms']            = "Website againts terms and conditions";
$GLOBALS['strChangeStatus']                = "Change status";
$GLOBALS['strCampaignType']                 = "项目类型";
$GLOBALS['strType']                         = "类型";
$GLOBALS['strContract']                     = "合同";
$GLOBALS['strRemnant']                      = "普通";
$GLOBALS['strStandardContract']             = "标准合同";
$GLOBALS['strExclusiveContract']            = "排他合同";
$GLOBALS['strRemnant']                      = "普通项目";
$GLOBALS['strStandardContractInfo']         = "通过控制每天的投放量，保证该项目的总投放量均匀分布到投放周期中的每一天。";
$GLOBALS['strExclusiveContractInfo']        = "当有多个项目的素材关联到同一版位时，总是保证该项目优先投放。";
$GLOBALS['strRemnantInfo']                  = "无特殊规则的普通项目。";
$GLOBALS['strECPMInfo']                     = "This is a standard campaign which can be constrained with either an end date or a specific limit. Based on current settings it will be prioritised using eCPM.";
$GLOBALS['strContractCampaign']             = "Contract Campaign";
$GLOBALS['strRemnantCampaign']              = "Remnant Campaign";
$GLOBALS['strPricing']                      = "结算";
$GLOBALS['strPricingModel']                 = "结算方式";
$GLOBALS['strSelectPricingModel']           = "-- 选择结算方式 --";
$GLOBALS['strRatePrice']                    = "单价";
$GLOBALS['strMinimumImpressions']           = "Minimum daily impressions";
$GLOBALS['strLimit']                        = "限制";
$GLOBALS['strLowExclusiveDisabled']         = "You cannot change this campaign to Remnant or Exclusive, since both an end date and either of impressions/clicks/conversions limit are set. <br>In order to change type, you need to set no expiry date or remove limits.";
$GLOBALS['strCannotSetBothDateAndLimit']    = "You cannot set both an end date and limit for a Remnant or Exclusive campaign.<br>If you need to set both an end date and limit impressions/clicks/conversions please use a non-exclusive Contract campaign.";
$GLOBALS['strWhyDisabled']                  = "为何禁用？";
$GLOBALS['strBackToCampaigns']              = "返回项目列表";
$GLOBALS['strCampaignBanners']              = "转到素材列表";
$GLOBALS['strCookies']                      = "Cookie";

// Tracker
$GLOBALS['strTracker']                    = "追踪器";
$GLOBALS['strTrackers']                   = "追踪器";
$GLOBALS['strTrackerOverview']            = "Tracker overview";
$GLOBALS['strTrackerPreferences']            = "Tracker Preferences";
$GLOBALS['strAddTracker']                 = "添加新的追踪器";
$GLOBALS['strAddTracker_Key']             = "添加新的追踪器（<u>n</u>）";
$GLOBALS['strTrackerForAdvertiser']       = "到";
$GLOBALS['strNoTrackers']                 = "您还没有为该客户添加追踪器";
$GLOBALS['strConfirmDeleteAllTrackers']   = "您真的要删除该客户的所有追踪器吗？";
$GLOBALS['strConfirmDeleteTrackers']      = "您真的要删除所有选中的追踪器吗？";
$GLOBALS['strConfirmDeleteTracker']       = "您真的要删除该追踪器吗？";
$GLOBALS['strDeleteAllTrackers']          = "删除所有追踪器";
$GLOBALS['strTrackerProperties']          = "追踪器";
$GLOBALS['strTrackerOverview']            = "Tracker Overview";
$GLOBALS['strModifyTracker']              = "Modify tracker";
$GLOBALS['strLog']                        = "Log?";
$GLOBALS['strDefaultStatus']              = "默认审核状态";
$GLOBALS['strStatus']                     = "状态";
$GLOBALS['strLinkedTrackers']             = "追踪器关联";
$GLOBALS['strTrackerInformation']         = "追踪器信息";
$GLOBALS['strConversionWindow']           = "数据追踪有效时间";
$GLOBALS['strUniqueWindow']               = "Unique window";
$GLOBALS['strClick']                      = "素材点击";
$GLOBALS['strView']                       = "素材展示";
$GLOBALS['strArrival']                    = "Arrival";
$GLOBALS['strManual']                     = "Manual";
$GLOBALS['strImpression']                 = "Impression";
$GLOBALS['strConversionClickWindow']      = "Count conversions which occur within this number of seconds of a click";
$GLOBALS['strConversionViewWindow']       = "Count conversions which occur within this number of seconds of a view";
$GLOBALS['strTotalTrackerImpressions']    = "Total Impressions";
$GLOBALS['strTotalTrackerConnections']    = "Total Connections";
$GLOBALS['strTotalTrackerConversions']    = "Total Conversions";
$GLOBALS['strTrackerImpressions']         = "Impressions";
$GLOBALS['strTrackerImprConnections']     = "Impression Connections";
$GLOBALS['strTrackerClickConnections']    = "Click Connections";
$GLOBALS['strTrackerImprConversions']     = "Impression Conversions";
$GLOBALS['strTrackerClickConversions']    = "Click Conversions";
$GLOBALS['strConversionType']             = "数据类型";
$GLOBALS['strLinkCampaignsByDefault']     = "自动关联新的项目";
$GLOBALS['strNoLinkedTrackersDropdown']   = "-- No linked tracker --";
$GLOBALS['strPerSingleImpression']        = "per single impression";
$GLOBALS['strBackToTrackers']             = "返回追踪器列表";



// Banners (General)
$GLOBALS['strBanner']                        = "素材";
$GLOBALS['strBanners']                       = "素材";
$GLOBALS['strBannerFilter']                  = "Banner Filter";
$GLOBALS['strAddBanner']                     = "添加新的素材";
$GLOBALS['strAddBanner_Key']                 = "添加新的素材（<u>n</u>）";
$GLOBALS['strBannerToCampaign']              = "到";
$GLOBALS['strModifyBanner']                  = "Modify banner";
$GLOBALS['strActiveBanners']                 = "Active banners";
$GLOBALS['strTotalBanners']                  = "Total banners";
$GLOBALS['strShowBanner']                    = "显示素材";
$GLOBALS['strShowAllBanners']                = "Show all banners";
$GLOBALS['strShowBannersNoAdViews']          = "Show banners without Impressions";
$GLOBALS['strShowBannersNoAdClicks']         = "Show banners without Clicks";
$GLOBALS['strShowBannersNoAdConversions']    = "Show banners without Sales";
$GLOBALS['strDeleteAllBanners']              = "Delete all banners";
$GLOBALS['strActivateAllBanners']            = "Activate all banners";
$GLOBALS['strDeactivateAllBanners']          = "Deactivate all banners";
$GLOBALS['strBannerOverview']                = "Banner Overview";
$GLOBALS['strBannerProperties']              = "素材";
$GLOBALS['strBannerHistory']                 = "投放记录";
$GLOBALS['strBannerNoStats']                 = "There are no statistics available for this banner";
$GLOBALS['strNoBanners']                     = "您还没有为该项目添加素材。";
$GLOBALS['strNoBannersAddCampaign']          = "您还没有添加素材。在添加新的素材前，您需要先<a href='campaign-edit.php?clientid=%s'>添加项目</a>。";
$GLOBALS['strNoBannersAddAdvertiser']        = "您还没有添加素材。在添加新的素材前，您需要先<a href='advertiser-edit.php'>添加客户</a>。";
$GLOBALS['strConfirmDeleteBanner']           = "删除素材会同时删除相关的投放记录。\\n您真的要删除该素材吗？";
$GLOBALS['strConfirmDeleteBanners']          = "删除素材会同时删除相关的投放记录。\\n您真的要删除所有选中的素材吗？";
$GLOBALS['strConfirmDeleteAllBanners']       = "删除素材会同时删除相关的投放记录。\\n您真的要删除该项目所有的素材吗？";
$GLOBALS['strConfirmResetBannerStats']       = "您真的要删除该素材所有的投放记录吗？";
$GLOBALS['strShowParentCampaigns']           = "显示素材所属的项目";
$GLOBALS['strHideParentCampaigns']           = "隐藏素材所属的项目";
$GLOBALS['strHideInactiveBanners']           = "隐藏停用的素材";
$GLOBALS['strInactiveBannersHidden']         = "个停用的素材已被隐藏";
$GLOBALS['strAppendOthers']                  = "Append others";
$GLOBALS['strAppendTextAdNotPossible']       = "It is not possible to append other banners to text ads.";
$GLOBALS['strHiddenBanner']                  = "显示素材";
$GLOBALS['strWarningTag1']                   = "Warning, tag ";
$GLOBALS['strWarningTag2']                   = " possibly is not closed/opened";
$GLOBALS['strWarningMissing']                = "Warning, possibly missing ";
$GLOBALS['strWarningMissingClosing']         = " closing tag '>'";
$GLOBALS['strWarningMissingOpening']         = " opening tag '<'";
$GLOBALS['strSubmitAnyway']       		     = "Submit Anyway";
$GLOBALS['strOverallBanners']                = "banner(s)";
$GLOBALS['strBannersOfCampaign']             = "属于"; //this is added between page name and campaign name eg. 'Banners in coca cola campaign'


// Banner Preferences
$GLOBALS['strBannerPreferences']                     = "素材";
$GLOBALS['strCampaignPreferences']                   = "项目";
$GLOBALS['strDefaultBanners']                        = "默认素材";
$GLOBALS['strDefaultBannerUrl']                      = "默认图片 URL";
$GLOBALS['strDefaultBannerDestination']              = "默认着陆页 URL";
$GLOBALS['strAllowedBannerTypes']                    = "Allowed Banner Types";
$GLOBALS['strTypeSqlAllow']                          = "Allow SQL Local Banners";
$GLOBALS['strTypeWebAllow']                          = "Allow Webserver Local Banners";
$GLOBALS['strTypeUrlAllow']                          = "Allow External Banners";
$GLOBALS['strTypeHtmlAllow']                         = "Allow HTML Banners";
$GLOBALS['strTypeTxtAllow']                          = "Allow Text Ads";
$GLOBALS['strTypeHtmlSettings']                      = "HTML Banner Options";
$GLOBALS['strTypeHtmlAuto']                          = "Automatically alter HTML banners in order to force click tracking";
$GLOBALS['strTypeHtmlPhp']                           = "Allow PHP expressions to be executed from within a HTML banner";

// Banner (Properties)
$GLOBALS['strChooseBanner']         = "请选择素材的类型";
$GLOBALS['strMySQLBanner']             = "Upload a local banner to the database";
$GLOBALS['strWebBanner']               = "上传本地图片到服务器";
$GLOBALS['strURLBanner']               = "Link an external banner";
$GLOBALS['strHTMLBanner']              = "Create an HTML banner";
$GLOBALS['strTextBanner']              = "创建一个文本素材";
$GLOBALS['strAlterHTML']               = "Alter HTML to enable click tracking for:";
$GLOBALS['strUploadOrKeep']            = "您希望保持现有的图片，还是上传新的图片？";
$GLOBALS['strUploadOrKeepAlt']        = "您希望保持现有的图片，还是上传新的图片？";
$GLOBALS['strNewBannerFile']         = "请选择您要上传的图片<br /><br /><br />";
$GLOBALS['strNewBannerFileAlt']     = "Select a backup image you <br />want to use in case browsers<br />don't support rich media<br /><br />";
$GLOBALS['strNewBannerURL']         = "Image URL (incl. http://)";
$GLOBALS['strURL']                     = "着陆页 URL（包括 http://）";
$GLOBALS['strHTML']                 = "HTML";
$GLOBALS['strKeyword']              = "关键字";
$GLOBALS['strTextBelow']             = "图片下方显示文字";
$GLOBALS['strWeight']                 = "权重";
$GLOBALS['strAlt']                     = "图片无法显示时的替换文字";
$GLOBALS['strStatusText']            = "状态栏信息";
$GLOBALS['strBannerWeight']            = "Banner weight";
$GLOBALS['strBannerType']           = "Ad Type";
$GLOBALS['strAdserverTypeGeneric']  = "Generic HTML Banner";
$GLOBALS['strDoNotAlterHtml']  = "Do not alter HTML";
$GLOBALS['strAdserverTypeMax']      = "Rich Media - OpenX";
$GLOBALS['strAdserverTypeAtlas']    = "Rich Media - Atlas";
$GLOBALS['strAdserverTypeBluestreak']   = "Rich Media - Bluestreak";
$GLOBALS['strAdserverTypeDoubleclick']  = "Rich Media - DoubleClick";
$GLOBALS['strAdserverTypeEyeblaster']   = "Rich Media - Eyeblaster";
$GLOBALS['strAdserverTypeFalk']         = "Rich Media - Falk";
$GLOBALS['strAdserverTypeMediaplex']    = "Rich Media - Mediaplex";
$GLOBALS['strAdserverTypeTangozebra']   = "Rich Media - Tango Zebra";
$GLOBALS['strGenericOutputAdServer'] = "Generic";
$GLOBALS['strSwfTransparency']		   = "Allow transparent background";
$GLOBALS['strBackToBanners']           = "返回素材列表";

// Banner (advanced)
$GLOBALS['strBannerPrependHTML']       = "在素材前附加 HTML 代码";
$GLOBALS['strBannerAppendHTML']        = "在素材后附加 HTML 代码";

// Banner (swf)
$GLOBALS['strCheckSWF']                = "Check for hard-coded links inside the Flash file";
$GLOBALS['strConvertSWFLinks']        = "Convert Flash links";
$GLOBALS['strHardcodedLinks']        = "Hard-coded links";
$GLOBALS['strConvertSWF']            = "<br />The Flash file you just uploaded contains hard-coded urls. ".MAX_PRODUCT_NAME." won't be able to track the number of Clicks for this banner unless you convert these hard-coded urls. Below you will find a list of all urls inside the Flash file. If you want to convert the urls, simply click <b>Convert</b>, otherwise click <b>Cancel</b>.<br /><br />Please note: if you click <b>Convert</b> the Flash file you just uploaded will be physically altered. <br />Please keep a backup of the original file. Regardless of in which version this banner was created, the resulting file will need the Flash 4 player (or higher) to display correctly.<br /><br />";
$GLOBALS['strCompressSWF']            = "Compress SWF file for faster downloading (Flash 6 player required)";
$GLOBALS['strOverwriteSource']        = "Overwrite source parameter";
$GLOBALS['strLinkToShort']            = "Warning: Hard-coded URLs detected - However the URL it too short to be automatically modified";

// Banner (network)
$GLOBALS['strBannerNetwork']        = "HTML template";
$GLOBALS['strChooseNetwork']        = "Choose the template you want to use";
$GLOBALS['strMoreInformation']        = "More information...";
$GLOBALS['strRichMedia']            = "Richmedia";
$GLOBALS['strTrackAdClicks']        = "Track Clicks";

// Banner (AdSense)
$GLOBALS['strAdSenseAccounts']            = "AdSense Accounts";
$GLOBALS['strLinkAdSenseAccount']         = "Link AdSense Account";
$GLOBALS['strCreateAdSenseAccount']       = "Create AdSense Account";
$GLOBALS['strEditAdSenseAccount']         = "Edit AdSense Account";

// Display limitations
$GLOBALS['strModifyBannerAcl']            = "投放控制";
$GLOBALS['strACL']                        = "投放控制";
$GLOBALS['strACLAdd']                     = "添加新的投放控制条件";
$GLOBALS['strACLAdd_Key']                 = "Add <u>n</u>ew limitation";
$GLOBALS['strNoLimitations']              = "无";
$GLOBALS['strApplyLimitationsTo']         = "复制投放控制条件至";
$GLOBALS['strAllBannersInCampaign']       = "该项目下的所有素材";
$GLOBALS['strRemoveAllLimitations']       = "删除所有投放控制条件";
$GLOBALS['strEqualTo']                    = "is equal to";
$GLOBALS['strDifferentFrom']              = "is different from";
$GLOBALS['strLaterThan']                  = "is later than";
$GLOBALS['strLaterThanOrEqual']           = "is later than or equal to";
$GLOBALS['strEarlierThan']                = "is earlier than";
$GLOBALS['strEarlierThanOrEqual']         = "is earlier than or equal to";
$GLOBALS['strContains']                   = "contains";
$GLOBALS['strNotContains']                = "doesn't contain";
$GLOBALS['strGreaterThan']                = "is greater than";
$GLOBALS['strLessThan']                   = "is less than";
$GLOBALS['strAND']                        = "AND";                          // logical operator
$GLOBALS['strOR']                         = "OR";                         // logical operator
$GLOBALS['strOnlyDisplayWhen']            = "仅当符合条件时显示素材：";
$GLOBALS['strWeekDay']                    = "Weekday";
$GLOBALS['strWeekDays']                   = "Weekdays";
$GLOBALS['strTime']                       = "Time";
$GLOBALS['strUserAgent']                  = "Useragent";
$GLOBALS['strDomain']                     = "域名";
$GLOBALS['strClientIP']                   = "Client IP";
$GLOBALS['strSource']                     = "来源";
$GLOBALS['strSourceFilter']               = "Source Filter";
$GLOBALS['strBrowser']                    = "浏览器";
$GLOBALS['strOS']                         = "OS";
$GLOBALS['strCountryCode']                = "Country Code (ISO 3166)";
$GLOBALS['strCountryName']                = "Country Name";
$GLOBALS['strRegion']                     = "Region Code (ISO-3166-2 or FIPS 10-4)";
$GLOBALS['strCity']                       = "City Name";
$GLOBALS['strPostalCode']                 = "US/Canada ZIP/Postcode";
$GLOBALS['strLatitude']                   = "Latitude";
$GLOBALS['strLongitude']                  = "Longitude";
$GLOBALS['strDMA']                        = "US DMA Code";
$GLOBALS['strArea']                       = "US Telephone Area Prefix Code";
$GLOBALS['strOrg']                        = "Organisation Name";
$GLOBALS['strIsp']                        = "ISP Name";
$GLOBALS['strNetspeed']                   = "Internet Connection Speed";
$GLOBALS['strReferer']                    = "Referring page";
$GLOBALS['strDeliveryLimitations']        = "投放控制条件";

$GLOBALS['strDeliveryCapping']            = "按用户进行投放控制";
$GLOBALS['strDeliveryCappingReset']       = "投放控制周期";
$GLOBALS['strDeliveryCappingTotal']       = "次（总计）";
$GLOBALS['strDeliveryCappingSession']     = "次／会话";

$GLOBALS['strCappingBanner'] = array();
$GLOBALS['strCappingBanner']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingBanner']['limit'] = "限制展示";

$GLOBALS['strCappingCampaign'] = array();
$GLOBALS['strCappingCampaign']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingCampaign']['limit'] = "限制展示";

$GLOBALS['strCappingZone'] = array();
$GLOBALS['strCappingZone']['title'] = $GLOBALS['strDeliveryCapping'];
$GLOBALS['strCappingZone']['limit'] = "限制展示";

// Website
$GLOBALS['strAffiliate']                = "Website";
$GLOBALS['strAffiliates']                 = "媒体";
$GLOBALS['strAffiliatesAndZones']        = "按媒体与版位";
$GLOBALS['strAddNewAffiliate']            = "添加新的媒体";
$GLOBALS['strAddNewAffiliate_Key']        = "Add <u>n</u>ew website";
$GLOBALS['strAddAffiliate']                = "Create website";
$GLOBALS['strAffiliateProperties']        = "媒体";
$GLOBALS['strAffiliateOverview']        = "Website Overview";
$GLOBALS['strAffiliateHistory']            = "投放记录";
$GLOBALS['strZonesWithoutAffiliate']    = "Zones without website";
$GLOBALS['strMoveToNewAffiliate']        = "Move to new website";
$GLOBALS['strNoAffiliates']                = "您还没有添加媒体。在添加新的版位前，您需要先<a href='affiliate-edit.php'>添加媒体</a>。";
$GLOBALS['strConfirmDeleteAffiliate']    = "您真的要删除该媒体吗？";
$GLOBALS['strConfirmDeleteAffiliates']   = "您真的要删除所有选中的媒体吗？";
$GLOBALS['strMakePublisherPublic']        = "Make the zones owned by this website publically available";
$GLOBALS['strAffiliateInvocation']      = "Invocation Code";
$GLOBALS['strAdvertiserSetup']          = "Advertiser Sign Up";
$GLOBALS['strTotalAffiliates']          = "Total websites";
$GLOBALS['strInactiveAffiliatesHidden'] = "inactive website(s) hidden";
$GLOBALS['strShowParentAffiliates']     = "显示版位所属的媒体";
$GLOBALS['strHideParentAffiliates']     = "隐藏版位所属的媒体";

// Website (properties)
$GLOBALS['strWebsite']                      = "Website";
$GLOBALS['strWebsiteURL']                      = "媒体 URL";
$GLOBALS['strMnemonic']                     = "Mnemonic";
$GLOBALS['strAllowAffiliateModifyInfo']     = "修改用户信息";
$GLOBALS['strAllowAffiliateModifyZones']    = "修改版位";
$GLOBALS['strAllowAffiliateLinkBanners']    = "设置素材关联";
$GLOBALS['strAllowAffiliateAddZone']        = "添加新的版位";
$GLOBALS['strAllowAffiliateDeleteZone']     = "删除版位";
$GLOBALS['strAllowAffiliateGenerateCode']   = "生成广告代码";
$GLOBALS['strAllowAffiliateZoneStats']      = "查看投放记录";
$GLOBALS['strAllowAffiliateApprPendConv']   = "Allow this user to only view approved or pending conversions";

// Website (properties - payment information)
$GLOBALS['strPaymentInformation']           = "Payment information";
$GLOBALS['strAddress']                      = "Address";
$GLOBALS['strPostcode']                     = "邮编";
$GLOBALS['strCity']                         = "City";
$GLOBALS['strCountry']                      = "国家";
$GLOBALS['strPhone']                        = "Phone";
$GLOBALS['strFax']                          = "Fax";
$GLOBALS['strAccountContact']               = "Account contact";
$GLOBALS['strPayeeName']                    = "Payee name";
$GLOBALS['strTaxID']                        = "Tax ID";
$GLOBALS['strModeOfPayment']                = "Mode of payment";
$GLOBALS['strPaymentChequeByPost']          = "Cheque by post";
$GLOBALS['strCurrency']                     = "Currency";
$GLOBALS['strCurrencyGBP']                  = "GBP";

// Website (properties - other information)
$GLOBALS['strOtherInformation']             = "Other information";
$GLOBALS['strUniqueUsersMonth']             = "Unique users/month";
$GLOBALS['strUniqueViewsMonth']             = "Unique views/month";
$GLOBALS['strPageRank']                     = "Page rank";
$GLOBALS['strCategory']                     = "分类";
$GLOBALS['strPrimaryCategory']              = "Primary category";
$GLOBALS['strSecondaryCategory']            = "Secondary category";
$GLOBALS['strHelpFile']                     = "Help file";
$GLOBALS['strApprovedTandC']                = "Approved terms and conditions";
$GLOBALS['strWebsiteZones']                 = "查看版位列表";

// Zone
$GLOBALS['strChooseZone']                   = "Choose Zone";
$GLOBALS['strZone']                         = "版位";
$GLOBALS['strZones']                        = "版位";
$GLOBALS['strAddNewZone']                   = "添加新的版位";
$GLOBALS['strAddNewZone_Key']               = "添加新的版位（<u>n</u>）";
$GLOBALS['strAddZone']                      = "Create zone";
$GLOBALS['strModifyZone']                   = "Modify zone";
$GLOBALS['strZoneToWebsite']                = "到";
$GLOBALS['strLinkedZones']                  = "版位关联";
$GLOBALS['strAvailableZones']               = "可关联的版位";
$GLOBALS['strLinkingNotSuccess']            = "Linking not successful, please try again";
$GLOBALS['strZoneOverview']                 = "Zone Overview";
$GLOBALS['strZoneProperties']               = "版位";
$GLOBALS['strZoneHistory']                  = "投放记录";
$GLOBALS['strNoZones']                      = "您还没有为该媒体添加版位。";
$GLOBALS['strNoZonesAddWebsite']            = "您还没有添加版位。在添加新的版位前，您需要先<a href='affiliate-edit.php'>添加媒体</a>。";
$GLOBALS['strConfirmDeleteZone']            = "您真的要删除该版位吗？";
$GLOBALS['strConfirmDeleteZones']           = "您真的要删除所有选中的版位吗？";
$GLOBALS['strConfirmDeleteZoneLinkActive']  = "检测到该版位有项目关联。如果您删除它，这些关联将被解除。这可能会影响您的收入。";
$GLOBALS['strZoneType']                     = "版位类型";
$GLOBALS['strBannerButtonRectangle']        = "图片（横幅、按钮、矩形等）";
$GLOBALS['strInterstitial']                 = "Interstitial or Floating DHTML";
$GLOBALS['strPopup']                        = "Popup";
$GLOBALS['strTextAdZone']                   = "文字链接";
$GLOBALS['strEmailAdZone']                  = "Email";
$GLOBALS['strZoneClick']                    = "Click tracking zone";
$GLOBALS['strZoneVideoInstream']            = "Inline Video ad";
$GLOBALS['strZoneVideoOverlay']             = "Overlay Video ad";
$GLOBALS['strShowMatchingBanners']          = "显示项目及素材";
$GLOBALS['strHideMatchingBanners']          = "仅显示项目列表";
$GLOBALS['strBannerLinkedAds']              = "Banners linked to the zone";
$GLOBALS['strCampaignLinkedAds']            = "关联到该版位的项目";
$GLOBALS['strTotalZones']                   = "Total zones";
$GLOBALS['strInactiveZonesHidden']          = "inactive zone(s) hidden";
$GLOBALS['strWarnChangeZoneType']           = "Changing the zone type to text or email will unlink all banners/campaigns due to restrictions of these zone types
                                                <ul>
                                                    <li>Text zones can only be linked to text ads</li>
                                                    <li>Email zone campaigns can only have one active banner at a time</li>
                                                </ul>";
$GLOBALS['strWarnChangeZoneSize']           = 'Changing the zone size will unlink any banners that are not the new size, and will add any banners from linked campaigns which are the new size';
$GLOBALS['strWarnChangeBannerSize']         = 'Changing the banner size will unlink this banner from any zones that are not the new size, and if this banner\'s <strong>campaign</strong> is linked to a zone of the new size, this banner will be automatically linked';
$GLOBALS['strWarnBannerReadonly']           = 'This banner is read-only because an extension has been disabled.  Contact your Administrator for more information.';
$GLOBALS['strInventoryForecasting']         = 'Inventory Forecasting';
$GLOBALS['strZonesOfWebsite']               = '属于'; //this is added between page name and website name eg. 'Zones in www.example.com'
$GLOBALS['strBackToZones']                  = "返回版位列表";

$GLOBALS['strIab']['IAB_FullBanner(468x60)']         = "IAB 标准全尺寸旗标（468 x 60）";
$GLOBALS['strIab']['IAB_Skyscraper(120x600)']        = "IAB 标准摩天大楼（120 x 600）";
$GLOBALS['strIab']['IAB_Leaderboard(728x90)']        = "IAB 标准排行榜（728 x 90）";
$GLOBALS['strIab']['IAB_Button1(120x90)']            = "IAB 标准按钮 1（120 x 90）";
$GLOBALS['strIab']['IAB_Button2(120x60)']            = "IAB 标准按钮 2（120 x 60）";
$GLOBALS['strIab']['IAB_HalfBanner(234x60)']         = "IAB 标准半尺寸旗标（234 x 60）";
$GLOBALS['strIab']['IAB_MicroBar(88x31)']            = "IAB 标准小旗标（88 x 31）";
$GLOBALS['strIab']['IAB_SquareButton(125x125)']      = "IAB 标准方形按钮（125 x 125）";
$GLOBALS['strIab']['IAB_Rectangle(180x150)*']        = "IAB 标准小尺寸矩形（180 x 150）";
$GLOBALS['strIab']['IAB_SquarePop-up(250x250)']      = "IAB 标准方形弹窗（250 x 250）";
$GLOBALS['strIab']['IAB_VerticalBanner(120x240)']    = "IAB 标准纵向旗标（120 x 240）";
$GLOBALS['strIab']['IAB_MediumRectangle(300x250)*']  = "IAB 标准中等尺寸矩形（300 x 250）";
$GLOBALS['strIab']['IAB_LargeRectangle(336x280)']    = "IAB 标准大尺寸矩形（336 x 280）";
$GLOBALS['strIab']['IAB_VerticalRectangle(240x400)'] = "IAB 标准纵向矩形（240 x 400）";
$GLOBALS['strIab']['IAB_WideSkyscraper(160x600)*']   = "IAB 标准加宽摩天大楼（160 x 600）";
$GLOBALS['strIab']['IAB_Pop-Under(720x300)']         = "IAB 标准后台弹窗（720 x 300）";
$GLOBALS['strIab']['IAB_3:1Rectangle(300x100)']      = "IAB 标准 3:1 矩形（300 x 100）";

// Advanced zone settings
$GLOBALS['strAdvanced']                    = "高级";
$GLOBALS['strChains']                    = "Chains";
$GLOBALS['strChainSettings']            = "版位链设置";
$GLOBALS['strZoneNoDelivery']            = "当该版位关联的所有素材都无法展示时...";
$GLOBALS['strZoneStopDelivery']            = "不展示任何素材";
$GLOBALS['strZoneOtherZone']            = "展示其它版位的素材";
$GLOBALS['strZoneUseKeywords']            = "Select a banner using the keywords entered below";
$GLOBALS['strZoneAppend']                = "在该版位展示的素材后附加 HTML 代码";
$GLOBALS['strAppendSettings']            = "附加代码";
$GLOBALS['strZoneForecasting']            = "Zone Forecasting settings";
$GLOBALS['strZonePrependHTML']            = "在该版位展示的素材前附加 HTML 代码";
$GLOBALS['strZoneAppendHTML']            = "在该版位展示的素材后附加 HTML 代码";
$GLOBALS['strZoneAppendNoBanner']        = "在没有任何素材展示时仍然投放附加代码";
$GLOBALS['strZoneAppendType']            = "Append type";
$GLOBALS['strZoneAppendHTMLCode']        = "HTML code";
$GLOBALS['strZoneAppendZoneSelection']    = "Popup or interstitial";
$GLOBALS['strZoneAppendSelectZone']        = "Always append the following popup or intersitial to banners displayed by this zone";

// Zone probability
$GLOBALS['strZoneProbListChain']        = "All the banners linked to the selected zone are currently not active. <br />This is the zone chain that will be followed:";
$GLOBALS['strZoneProbNullPri']            = "There are no active banners linked to this zone.";
$GLOBALS['strZoneProbListChainLoop']    = "Following the zone chain would cause a circular loop. Delivery for this zone is halted.";

// Linked banners/campaigns/trackers
$GLOBALS['strSelectZoneType']            = "请选择关联方式";
$GLOBALS['strLinkedBanners']            = "按素材关联";
$GLOBALS['strCampaignDefaults']            = "按项目批量关联";
$GLOBALS['strLinkedCategories']         = "Link banners by category";
$GLOBALS['strWithXBanners']                = "%d 个素材";
$GLOBALS['strInteractive']                = "Interactive";
$GLOBALS['strRawQueryString']            = "Keyword";
$GLOBALS['strIncludedBanners']            = "素材关联";
$GLOBALS['strLinkedBannersOverview']    = "Linked banners overview";
$GLOBALS['strLinkedBannerHistory']        = "Linked banner history";
$GLOBALS['strNoZonesToLink']            = "There are no zones available to which this banner can be linked";
$GLOBALS['strNoBannersToLink']            = "There are currently no banners available which can be linked to this zone";
$GLOBALS['strNoLinkedBanners']            = "There are no banners available which are linked to this zone";
$GLOBALS['strMatchingBanners']            = "{count} 个可匹配的素材";
$GLOBALS['strNoCampaignsToLink']        = "There are currently no campaigns available which can be linked to this zone";
$GLOBALS['strNoTrackersToLink']            = "There are currently no trackers available which can be linked to this campaign";
$GLOBALS['strNoZonesToLinkToCampaign']  = "There are no zones available to which this campaign can be linked";
$GLOBALS['strSelectBannerOrMarketCampaignToLink']        = "请选择您要关联到该版位的素材：";
$GLOBALS['strSelectCampaignToLink']        = "请选择您要关联到该版位的项目：";
$GLOBALS['strSelectAdvertiser']         = "选择客户";
$GLOBALS['strSelectPlacement']          = "选择项目";
$GLOBALS['strSelectAd']                 = "选择素材";
$GLOBALS['strSelectPublisher']          = "Select Website";
$GLOBALS['strSelectZone']               = "Select Zone";
$GLOBALS['strTrackerCode']              = "Append the following code to each Javascript tracker impression";
$GLOBALS['strTrackerCodeSubject']          = "Append Tracker Code";
$GLOBALS['strAppendTrackerNotPossible']    = "It is not possible to append that tracker.";
$GLOBALS['strStatusPending']            = "待审";
$GLOBALS['strStatusApproved']           = "有效";
$GLOBALS['strStatusDisapproved']        = "无效";
$GLOBALS['strStatusDuplicate']          = "重复";
$GLOBALS['strStatusOnHold']             = "On Hold";
$GLOBALS['strStatusIgnore']             = "忽略";
$GLOBALS['strConnectionType']           = "Type";
$GLOBALS['strConnTypeSale']             = "订单";
$GLOBALS['strConnTypeLead']             = "展示";
$GLOBALS['strConnTypeSignUp']           = "注册";
$GLOBALS['strShortcutEditStatuses'] = "编辑审核状态";
$GLOBALS['strShortcutShowStatuses'] = "显示审核状态";

// Statistics
$GLOBALS['strStats']                     = "报表";
$GLOBALS['strNoStats']                   = "暂时没有投放记录";
$GLOBALS['strNoTargetingStats']          = "There are currently no targeting statistics available";
$GLOBALS['strNoStatsForPeriod']          = "%s 到 %s 暂时没有投放记录";
$GLOBALS['strNoTargetingStatsForPeriod'] = "There are currently no targeting statistics available for the period %s to %s";
$GLOBALS['strConfirmResetStats']         = "您真的要删除所有投放记录吗？";
$GLOBALS['strGlobalHistory']             = "全局";
$GLOBALS['strDailyHistory']              = "Daily history";
$GLOBALS['strDailyStats']                = "全天投放记录";
$GLOBALS['strWeeklyHistory']             = "Weekly history";
$GLOBALS['strMonthlyHistory']            = "Monthly history";
$GLOBALS['strCreditStats']               = "Credit statistics";
$GLOBALS['strDetailStats']               = "Detailed statistics";
$GLOBALS['strTotalThisPeriod']           = "Total this period";
$GLOBALS['strAverageThisPeriod']         = "Average this period";
$GLOBALS['strPublisherDistribution']     = "按媒体分布";
$GLOBALS['strCampaignDistribution']      = "按项目分布";
$GLOBALS['strDistributionBy']            = "Distribution by";
$GLOBALS['strResetStats']                = "Reset statistics";
$GLOBALS['strSourceStats']               = "Source statistics";
$GLOBALS['strSources']                   = "Sources";
$GLOBALS['strAvailableSources']          = "Available Sources";
$GLOBALS['strSelectSource']              = "Select the source you want to view:";
$GLOBALS['strSizeDistribution']          = "Distribution by size";
$GLOBALS['strCountryDistribution']       = "Distribution by country";
$GLOBALS['strEffectivity']               = "Effectivity";
$GLOBALS['strTargetStats']               = "Targeting Statistics";
$GLOBALS['strCampaignTarget']            = "Target";
$GLOBALS['strTargetRatio']               = "Target Ratio";
$GLOBALS['strTargetModifiedDay']         = "Targets were modified during the day, targeting could be not accurate";
$GLOBALS['strTargetModifiedWeek']        = "Targets were modified during the week, targeting could be not accurate";
$GLOBALS['strTargetModifiedMonth']       = "Targets were modified during the month, targeting could be not accurate";
$GLOBALS['strNoTargetStats']             = "There are currently no statistics about targeting available";
$GLOBALS['strOVerall']                   = "Overall";
$GLOBALS['strByZone']                    = "By Zone";
$GLOBALS['strImpressionsRequestsRatio']  = "View Request Ratio (%)";
$GLOBALS['strViewBreakdown']             = "时间视图";
$GLOBALS['strBreakdownByDay']            = "按天";
$GLOBALS['strBreakdownByWeek']           = "按周";
$GLOBALS['strBreakdownByMonth']          = "按月";
$GLOBALS['strBreakdownByDow']            = "按星期";
$GLOBALS['strBreakdownByHour']           = "按小时";
$GLOBALS['strItemsPerPage']              = "每页显示";
$GLOBALS['strDistributionHistory']       = "Distribution history";
$GLOBALS['strDistributionHistoryCampaign'] = "Distribution history (Campaign)";
$GLOBALS['strDistributionHistoryBanner'] = "Distribution history (Banner)";
$GLOBALS['strDistributionHistoryWebsite'] = "Distribution history (Website)";
$GLOBALS['strDistributionHistoryZone']   = "Distribution history (Zone)";
$GLOBALS['strShowGraphOfStatistics']     = "Show <u>G</u>raph of Statistics";
$GLOBALS['strExportStatisticsToExcel']   = "导出为 Excel 格式（<u>E</u>）";
$GLOBALS['strGDnotEnabled']              = "You must have GD enabled in PHP to display graphs. <br />Please see <a href='http://www.php.net/gd' target='_blank'>http://www.php.net/gd</a> for more information, including how to install GD on your server.";
$GLOBALS['strTTFnotEnabled']             = "You have GD enabled in PHP but there is a problem with FreeType support. <br /> Freetype is needed in order to show the graph. <br />Please check your server configuration.";
$GLOBALS['strStatsArea']                 = "Area";

// Hosts
$GLOBALS['strHosts']                = "Hosts";
$GLOBALS['strTopHosts']             = "Top requesting hosts";
$GLOBALS['strTopCountries']         = "Top requesting countries";
$GLOBALS['strRecentHosts']             = "Most recent requesting hosts";

// Expiration
$GLOBALS['strExpired']                = "Expired";
$GLOBALS['strExpiration']             = "Expiration";
$GLOBALS['strNoExpiration']           = "No expiration date set";
$GLOBALS['strEstimated']              = "Estimated expiration date";
$GLOBALS['strNoExpirationEstimation'] = "No expiration estimated yet";
$GLOBALS['strDaysAgo']                = "days ago";
$GLOBALS['strCampaignStop']           = "Campaign stop";

// Reports
$GLOBALS['strReports']                = "报表";
$GLOBALS['strAdvancedReports']        = "更多...";
$GLOBALS['strAdminReports']           = "Admin Reports";
$GLOBALS['strAdvertiserReports']      = "Advertiser Reports";
$GLOBALS['strAgencyReports']          = "Agency Reports";
$GLOBALS['strPublisherReports']       = "Website Reports";
$GLOBALS['strSelectReport']           = "Select the report you want to generate";
$GLOBALS['strStartDate']              = "开始日期";
$GLOBALS['strEndDate']                = "结束日期";
$GLOBALS['strNoData']                 = "There is no data available for this time period";
$GLOBALS['strPeriod']                 = "时间段";
$GLOBALS['strLimitations']            = "投放控制";
$GLOBALS['strWorksheets']             = "选择报表";

// Admin_UI_Fields
$GLOBALS['strAllAdvertisers']            = "所有客户";
$GLOBALS['strAnonAdvertisers']           = "Anonymous advertisers";
$GLOBALS['strAllPublishers']             = "所有媒体";
$GLOBALS['strAnonPublishers']            = "Anonymous websites";
$GLOBALS['strAllAvailZones']             = "All available zones";

// Userlog
$GLOBALS['strUserLog']                = "日志";
$GLOBALS['strUserLogDetails']        = "User log details";
$GLOBALS['strDeleteLog']            = "Delete log";
$GLOBALS['strAction']                = "Action";
$GLOBALS['strNoActionsLogged']        = "No actions are logged";

// Code generation
$GLOBALS['strGenerateBannercode']        = "生成代码";
$GLOBALS['strChooseInvocationType']        = "请选择调用方式";
$GLOBALS['strGenerate']                    = "生成";
$GLOBALS['strParameters']                = "参数设置";
$GLOBALS['strFrameSize']                = "Frame size";
$GLOBALS['strBannercode']                = "素材代码";
$GLOBALS['strTrackercode']                = "Trackercode";
$GLOBALS['strOptional']                    = "optional";
$GLOBALS['strBackToTheList']            = "选择其它报表";
$GLOBALS['strGoToReportBuilder']        = "Go to the selected report";
$GLOBALS['strCharset']                  = "字符集";
$GLOBALS['strAutoDetect']                   = "自动检测";
$GLOBALS['strCacheBusterComment']       = "  * Replace all instances of {random} with
  * a generated random number (or timestamp).
  *";
$GLOBALS['strSSLBackupComment']         = "
  * The backup image section of this tag has been generated for use on a
  * non-SSL page. If this tag is to be placed on an SSL page, change the
  *   'http://%s/...'
  * to
  *   'https://%s/...'
  *";
$GLOBALS['strSSLDeliveryComment']       = "
  * This tag has been generated for use on a non-SSL page. If this tag
  * is to be placed on an SSL page, change the
  *   'http://%s/...'
  * to
  *   'https://%s/...'
  *";

$GLOBALS['strThirdPartyComment']        = "
  * Don't forget to replace the '{clickurl}' text with
  * the click tracking URL if this ad is to be delivered through a 3rd
  * party (non-Max) adserver.
  *";

// Errors
$GLOBALS['strMySQLError']                       = "SQL 错误：";
$GLOBALS['strErrorDatabaseConnetion']           = "数据库连接错误";
$GLOBALS['strErrorCantConnectToDatabase']       = "致命错误： %s 无法连接到数据库。管理界面目前无法使用，同时广告投放功能也有可能收到影响。常见的错误原因有：
                                                   <ul>
                                                     <li>数据库服务器出现故障</li>
                                                     <li>数据库服务器的地址变更</li>
                                                     <li>用于连接数据库服务器的用户名或密码错误</li>
                                                     <li>PHP 没有加载 MySQL 扩展</li>
                                                   </ul>";
$GLOBALS['strLogErrorClients']                  = "[phpAds] 从数据库读取客户信息时发生错误。";
$GLOBALS['strLogErrorBanners']                  = "[phpAds] 从数据库读取素材信息时发生错误。";
$GLOBALS['strLogErrorViews']                    = "[phpAds] 从数据库读取素材展示信息时发生错误。";
$GLOBALS['strLogErrorClicks']                   = "[phpAds] 从数据库读取素材点击信息时发生错误。";
$GLOBALS['strLogErrorConversions']              = "[phpAds] 从数据库读取数据追踪信息时发生错误。";
$GLOBALS['strErrorViews']                       = "请输入限制展示次数或选择无限制。";
$GLOBALS['strErrorNegViews']                    = "展示次数不可以为负值。";
$GLOBALS['strErrorClicks']                      = "请输入限制点击次数或选择无限制。";
$GLOBALS['strErrorNegClicks']                   = "点击次数不可以为负值。";
$GLOBALS['strErrorConversions']                 = "请输入限制数据追踪次数或选择无限制。";
$GLOBALS['strErrorNegConversions']              = "限制数据追踪次数不可以为负值。";
$GLOBALS['strNoMatchesFound']                   = "没有找到匹配的信息。";
$GLOBALS['strErrorOccurred']                    = "发生错误。";
$GLOBALS['strErrorUploadSecurity']              = "检测到安全问题，已暂停升级。";
$GLOBALS['strErrorUploadBasedir']               = "无法访问上传的文件。请检查 PHP 的 safe_mode 和 open_basedir 设置。";
$GLOBALS['strErrorUploadUnknown']               = "无法访问上传的文件。原因未知。请检查 PHP 的设置。";
$GLOBALS['strErrorStoreLocal']                  = "保存图片时发生错误。请检查图片存储路径设置。";
$GLOBALS['strErrorStoreFTP']                    = "向 FTP 服务器上传图片时发生错误。请检查 FTP 服务器配置，并确保 FTP 服务器正常工作。";
$GLOBALS['strErrorDBPlain']                     = "访问数据库时发生错误。";
$GLOBALS['strErrorDBSerious']                   = "检测到数据库存在严重问题。";
$GLOBALS['strErrorDBNoDataPlain']               = "数据库异常，".MAX_PRODUCT_NAME." 无法存取数据。";
$GLOBALS['strErrorDBNoDataSerious']             = "数据库异常，".MAX_PRODUCT_NAME." 无法读取数据。";
$GLOBALS['strErrorDBCorrupt']                   = "数据表异常，请参考 <i>Administrator guide</i> 中的 <i>Troubleshooting</i> 章节尝试修复。";
$GLOBALS['strErrorDBContact']                   = "请联系系统管理员。";
$GLOBALS['strErrorDBSubmitBug']                 = "If this problem is reproducable it might be caused by a bug in ".MAX_PRODUCT_NAME.". Please report the following information to the creators of ".MAX_PRODUCT_NAME.". Also try to describe the actions that led to this error as clearly as possible.";
$GLOBALS['strMaintenanceNotActive']             = "距离上次运行维护脚本已经超过 24 小时。\\n为保证 ".MAX_PRODUCT_NAME." 正常工作，维护脚本运行的间隔不应该超过 1 小时。\\n\\n请参考 Administrator guide 配置维护脚本。";
$GLOBALS['strErrorBadUserType']                 = "系统无法检测您的账户类型。";
$GLOBALS['strErrorLinkingBanner']               = "将素材关联到该版位时发生错误：";
$GLOBALS['strUnableToLinkBanner']               = "无法关联该素材：";
$GLOBALS['strErrorEditingCampaign']             = "修改项目时发生错误：";
$GLOBALS['strUnableToChangeCampaign']           = "无法修改该项目：";
$GLOBALS['strErrorEditingCampaignRevenue']      = "收入金额数字格式无效。";
$GLOBALS['strErrorEditingCampaignECPM']         = "ECPM 数字格式无效。";
$GLOBALS['strErrorEditingZone']                 = "修改版位时发生错误：";
$GLOBALS['strUnableToChangeZone']               = "无法修改该版位：";
$GLOBALS['strDatesConflict']                    = "该项目与其它已经关联的项目的日期有重叠。";
$GLOBALS['strEmailNoDates']                     = "Email 类型的版位所关联的项目必须设置启用和停用日期。";
$GLOBALS['strWarningInaccurateStats']           = "部分投放记录采用了非 UTC 时区，可能导致显示不准确。";
$GLOBALS['strWarningInaccurateReadMore']        = "查看详细解释";
$GLOBALS['strWarningInaccurateReport']          = "该报表中的部分投放记录采用了非 UTC 时区，可能导致显示不准确。";

//Validation
$GLOBALS['strRequiredFieldLegend']              = "表示必填的项目";
$GLOBALS['strFormContainsErrors']               = "表单填写有错误，请修正。";
$GLOBALS['strRequiredField']                    = "必填项目";
$GLOBALS['strXRequiredField']                   = "%s 为必填。";
$GLOBALS['strMaxLengthField']                   = "不能超过 %s 个字符。";
$GLOBALS['strEmailField']                       = "Email 格式无效。";
$GLOBALS['strNumericField']                     = "必须为数字。";
$GLOBALS['strGreaterThanZeroField']             = "必须大于 0。";
$GLOBALS['strXGreaterThanZeroField']            = "%s 必须大于 0。";
$GLOBALS['strXPositiveWholeNumberField']        = "%s 必须是正整数。";
$GLOBALS['strXUniqueField']                     = "不能与其它 %s 的 %s 相同。";
$GLOBALS['strXDecimalFieldWithDecimalPlaces']   = "必须是不超过 %s 位的整数。";
$GLOBALS['strInvalidWebsiteURL']                = "媒体 URL 格式无效。";


// Email
$GLOBALS['strSirMadam']                         = "先生／女士";
$GLOBALS['strMailSubject']                      = "项目报表";
$GLOBALS['strAdReportSent']                     = "Advertiser report sent";
$GLOBALS['strMailHeader']                       = "Dear {contact},\n";
$GLOBALS['strMailBannerStats']                  = "Below you will find the banner statistics for {clientname}:";
$GLOBALS['strMailBannerActivatedSubject']       = "Campaign activated";
$GLOBALS['strMailBannerDeactivatedSubject']     = "Campaign deactivated";
$GLOBALS['strMailBannerActivated']              = "Your campaign shown below has been activated because\nthe campaign activation date has been reached.";
$GLOBALS['strMailBannerDeactivated']            = "Your campaign shown below has been deactivated because";
$GLOBALS['strMailFooter']                       = "Regards,\n   {adminfullname}";
$GLOBALS['strMailClientDeactivated']            = "The following banners have been disabled because";
$GLOBALS['strMailNothingLeft']                  = "If you would like to continue advertising on our website, please feel free to contact us.\nWe'd be glad to hear from you.";
$GLOBALS['strClientDeactivated']                = "该项目已被停用";
$GLOBALS['strBeforeActivate']                   = "还没到项目启用日期";
$GLOBALS['strAfterExpire']                      = "已过了项目停用日期";
$GLOBALS['strNoMoreImpressions']                = "已达到素材展示上限";
$GLOBALS['strNoMoreClicks']                     = "已达到素材点击上线";
$GLOBALS['strNoMoreConversions']                = "已达到订单上限";
$GLOBALS['strWeightIsNull']                     = "权重设置为零";
$GLOBALS['strRevenueIsNull']                    = "收入设置为零";
$GLOBALS['strTargetIsNull']                     = "每日投放量上限设置为零，您需要设置项目停用日期以及每日投放量上限";
$GLOBALS['strWarnClientTxt']                    = "素材的展示，点击或数据追踪已低于投放控制条件 {limit}。当达到上限时素材会被停用。";
$GLOBALS['strImpressionsClicksConversionsLow']  = "Impressions/Clicks/Conversions are low";
$GLOBALS['strNoViewLoggedInInterval']           = "No Impressions were logged during the span of this report";
$GLOBALS['strNoClickLoggedInInterval']          = "No Clicks were logged during the span of this report";
$GLOBALS['strNoConversionLoggedInInterval']     = "No Conversions were logged during the span of this report";
$GLOBALS['strMailReportPeriod']                 = "This report includes statistics from {startdate} up to {enddate}.";
$GLOBALS['strMailReportPeriodAll']              = "This report includes all statistics up to {enddate}.";
$GLOBALS['strNoStatsForCampaign']               = "There are no statistics available for this campaign";
$GLOBALS['strImpendingCampaignExpiry']          = "Impending campaign expiration";
$GLOBALS['strYourCampaign']                     = "Your campaign";
$GLOBALS['strTheCampiaignBelongingTo']          = "The campaign belonging to";
$GLOBALS['strImpendingCampaignExpiryDateBody']  = "{clientname} shown below is due to end on {date}.";
$GLOBALS['strImpendingCampaignExpiryImpsBody']  = "{clientname} shown below has less than {limit} impressions remaining.";
$GLOBALS['strImpendingCampaignExpiryBody']      = "As a result, the campaign will soon be automatically disabled, and the\nfollowing banners in the campaign will also be disabled:";

// Priority
$GLOBALS['strPriority']                         = "优先级";
$GLOBALS['strSourceEdit']                       = "Edit Sources";




// Preferences
$GLOBALS['strPreferences']                      = "设置";
$GLOBALS['strMyAccount']                        = "账户";
$GLOBALS['strConfiguration']                    = "Configuration";
$GLOBALS['strMainPreferences']                  = "Main Preferences";
$GLOBALS['strAccountPreferences']               = "Account Preferences";
$GLOBALS['strCampaignEmailReportsPreferences']  = "报表";
$GLOBALS['strTimezonePreferences']              = "时区";
$GLOBALS['strAdminEmailWarnings']               = "Administrator email Warnings";
$GLOBALS['strAgencyEmailWarnings']              = "Agency email Warnings";
$GLOBALS['strAdveEmailWarnings']                = "Advertiser email Warnings";
$GLOBALS['strFullName']                         = "姓名";
$GLOBALS['strEmailAddress']                     = "Email";
$GLOBALS['strUserDetails']                      = "用户信息";
$GLOBALS['strLanguageTimezone']                 = "Language & Timezone";
$GLOBALS['strLanguageTimezonePreferences']      = "Language and Timezone Preferences";
$GLOBALS['strUserInterfacePreferences']         = "界面";
$GLOBALS['strPluginPreferences']                = "插件";
$GLOBALS['strInvocationPreferences']            = "Invocation Preferences";
$GLOBALS['strColumnName']                       = "Column Name";
$GLOBALS['strShowColumn']                       = "Show Column";
$GLOBALS['strCustomColumnName']                 = "Custom Column Name";
$GLOBALS['strColumnRank']                       = "Column Rank";
$GLOBALS['strUserPreferences']                  = "信息";
$GLOBALS['strChangePassword']                   = "更新密码";
$GLOBALS['strChangeEmail']                      = "更新 Email";
$GLOBALS['strCurrentPassword']                  = "当前密码";
$GLOBALS['strChooseNewPassword']                = "新密码";
$GLOBALS['strReenterNewPassword']               = "新密码确认";
$GLOBALS['strNameLanguage']                     = "姓名与语言";


// Statistics columns
// Long names
$GLOBALS['strRevenue']                             = "收入";
$GLOBALS['strNumberOfItems']                       = "追踪器数据计数";
$GLOBALS['strRevenueCPC']                          = "CPC 收入";
$GLOBALS['strERPM']                                = "ERPM";
$GLOBALS['strERPC']                                = "ERPC";
$GLOBALS['strERPS']                                = "ERPS";
$GLOBALS['strEIPM']                                = "EIPM";
$GLOBALS['strEIPC']                                = "EIPC";
$GLOBALS['strEIPS']                                = "EIPS";
$GLOBALS['strECPM']                                = "eCPM";
$GLOBALS['strECPC']                                = "ECPC";
$GLOBALS['strECPS']                                = "ECPS";
$GLOBALS['strEPPM']                                = "EPPM";
$GLOBALS['strEPPC']                                = "EPPC";
$GLOBALS['strEPPS']                                = "EPPS";
$GLOBALS['strPendingConversions']               = "待审数据";
$GLOBALS['strImpressionSR']                     = "素材展示 SR";
$GLOBALS['strClickSR']                          = "素材点击 SR";
$GLOBALS['strRequiredImpressions']              = "Required Impressions";
$GLOBALS['strRequestedImpressions']             = "Requested Impressions";
$GLOBALS['strActualImpressions']                = "Impressions";
$GLOBALS['strZoneForecast']                     = "Zone Forecast";
$GLOBALS['strZonesForecast']                    = "Sum Zone Forecasts";
$GLOBALS['strZoneImpressions']                  = "Zone Impressions";
$GLOBALS['strZonesImpressions']                 = "Sum Zone Impressions";

    // Short names
$GLOBALS['strRevenue_short']                    = "收入";
$GLOBALS['strBasketValue_short']                = "BV";
$GLOBALS['strNumberOfItems_short']              = "计数";
$GLOBALS['strRevenueCPC_short']                 = "CPC 收入";
$GLOBALS['strERPM_short']                       = "ERPM";
$GLOBALS['strERPC_short']                       = "ERPC";
$GLOBALS['strERPS_short']                       = "ERPS";
$GLOBALS['strEIPM_short']                       = "EIPM";
$GLOBALS['strEIPC_short']                       = "EIPC";
$GLOBALS['strEIPS_short']                       = "EIPS";
$GLOBALS['strECPM_short']                       = "ECPM";
$GLOBALS['strECPC_short']                       = "ECPC";
$GLOBALS['strECPS_short']                       = "ECPS";
$GLOBALS['strEPPM_short']                       = "EPPM";
$GLOBALS['strEPPC_short']                       = "EPPC";
$GLOBALS['strEPPS_short']                       = "EPPS";
$GLOBALS['strID_short']                         = "ID";
$GLOBALS['strRequests_short']                   = "请求";
$GLOBALS['strImpressions_short']                = "展示";
$GLOBALS['strClicks_short']                     = "点击";
$GLOBALS['strCTR_short']                        = "CTR";
$GLOBALS['strConversions_short']                = "数据";
$GLOBALS['strPendingConversions_short']         = "待审";
$GLOBALS['strImpressionSR_short']               = "展示 SR";
$GLOBALS['strClickSR_short']                    = "点击 SR";

// Global Settings
$GLOBALS['strGlobalSettings']               = "Global Settings";
$GLOBALS['strGeneralSettings']              = "General Settings";
$GLOBALS['strMainSettings']                 = "Main Settings";
$GLOBALS['strAdminSettings']                = "Administration Settings";
$GLOBALS['strPlugins']                      = "Plugins";

$GLOBALS['strChooseSection']          = 'Choose Section';

// Product Updates
$GLOBALS['strProductUpdates']         = "Product Updates";
$GLOBALS['strViewPastUpdates']        = "Manage Past Updates and Backups";
$GLOBALS['strFromVersion']            = "From Version";
$GLOBALS['strToVersion']              = "To Version";
$GLOBALS['strToggleDataBackupDetails']= "Toggle data backup details";
$GLOBALS['strClickViewBackupDetails'] = "click to view backup details";
$GLOBALS['strClickHideBackupDetails'] = "click to hide backup details";
$GLOBALS['strShowBackupDetails']      = "Show data backup details";
$GLOBALS['strHideBackupDetails']      = "Hide data backup details";
$GLOBALS['strInstallation']           = "Installation";
$GLOBALS['strBackupDeleteConfirm']    = "Do you really want to delete all backups created from this upgrade?";
$GLOBALS['strDeleteArtifacts']         = "Delete Artifacts";
$GLOBALS['strArtifacts']              = "Artifacts";
$GLOBALS['strBackupDbTables']         = "Backup database tables";
$GLOBALS['strLogFiles']               = "Log files";
$GLOBALS['strConfigBackups']          = "Conf backups";
$GLOBALS['strUpdatedDbVersionStamp']  = "Updated database version stamp";
$GLOBALS['aProductStatus']['UPGRADE_COMPLETE']  = "UPGRADE COMPLETE";
$GLOBALS['aProductStatus']['UPGRADE_FAILED']    = "UPGRADE FAILED";

// Agency
$GLOBALS['strAgencyManagement']              = "用户组";
$GLOBALS['strAgency']                      = "Account";
$GLOBALS['strAgencies']                   = "Accounts";
$GLOBALS['strAddAgency']                   = "添加新的用户组";
$GLOBALS['strAddAgency_Key']               = "添加新的用户组（<u>n</u>）";
$GLOBALS['strTotalAgencies']               = "用户组数";
$GLOBALS['strAgencyProperties']              = "用户组";
$GLOBALS['strNoAgencies']                 = "您还没有添加用户组";
$GLOBALS['strConfirmDeleteAgency']           = "您真的要删除该用户组吗？";
$GLOBALS['strHideInactiveAgencies']          = "隐藏停用的用户组";
$GLOBALS['strInactiveAgenciesHidden']     = "个用户组已被隐藏";
$GLOBALS['strAllowAgencyEditConversions'] = "Allow this user to edit conversions";
$GLOBALS['strAllowMoreReports']           = "Allow 'More Reports' button";
$GLOBALS['strSwitchAccount']              = "切换到该组";

// Channels
$GLOBALS['strChannel']                    = "Targeting Channel";
$GLOBALS['strChannels']                   = "频道";
$GLOBALS['strChannelOverview']            = "Targeting Channel Overview";
$GLOBALS['strChannelManagement']          = "Targeting Channel Management";
$GLOBALS['strAddNewChannel']              = "添加新的频道";
$GLOBALS['strAddNewChannel_Key']          = "添加新的频道（<u>n</u>）";
$GLOBALS['strChannelToWebsite']           = "到";
$GLOBALS['strNoChannels']                 = "您还没有添加频道。";
$GLOBALS['strNoChannelsAddWebsite']       = "您还没有添加频道。在添加新的频道前，您需要先<a href='affiliate-edit.php'>添加媒体</a>。";

$GLOBALS['strEditChannelLimitations']     = "Edit targeting channel limitations";
$GLOBALS['strChannelProperties']          = "频道";
$GLOBALS['strChannelLimitations']         = "投放选项";
$GLOBALS['strConfirmDeleteChannel']       = "您真的要删除该频道吗？";
$GLOBALS['strConfirmDeleteChannels']      = "您真的要删除所有选中的频道吗？";
$GLOBALS['strModifychannel']              = "Edit targeting channel";
$GLOBALS['strChannelsOfWebsite']          = '属于'; //this is added between page name and website name eg. 'Targeting channels in www.example.com'

// Tracker Variables
$GLOBALS['strVariableName']             = "变量名";
$GLOBALS['strVariableDescription']     = "详细描述";
$GLOBALS['strVariableDataType']         = "数据类型";
$GLOBALS['strVariablePurpose']       = "目的";
$GLOBALS['strGeneric']               = "一般";
$GLOBALS['strBasketValue']           = "Basket value";
$GLOBALS['strNumItems']              = "计数";
$GLOBALS['strVariableIsUnique']      = "检查唯一性";
$GLOBALS['strJavascript']             = "Javascript";
$GLOBALS['strRefererQuerystring']     = "Referer Querystring";
$GLOBALS['strQuerystring']             = "Querystring";
$GLOBALS['strInteger']                 = "Integer";
$GLOBALS['strNumber']                 = "数字";
$GLOBALS['strString']                 = "字符串";
$GLOBALS['strTrackFollowingVars']     = "追踪以下变量";
$GLOBALS['strAddVariable']             = "添加变量";
$GLOBALS['strNoVarsToTrack']         = "您还没有添加要追踪的变量";
$GLOBALS['strVariableHidden']       = "对指定媒体隐藏";
$GLOBALS['strVariableRejectEmpty']  = "检查非空";
$GLOBALS['strTrackingSettings']     = "追踪器设置";
$GLOBALS['strTrackerType']          = "追踪器类型";
$GLOBALS['strTrackerTypeJS']        = "追踪 JavaScript 变量";
$GLOBALS['strTrackerTypeDefault']   = "追踪 JavaScript 变量（向后兼容，需转义）";
$GLOBALS['strTrackerTypeDOM']       = "通过 DOM 追踪 HTML 元素";
$GLOBALS['strTrackerTypeCustom']    = "自定义 JavaScript 代码";
$GLOBALS['strVariableCode']         = "Javascript 追踪代码";


// Upload conversions
$GLOBALS['strRecordLengthTooBig']   = "Record length too big";
$GLOBALS['strRecordNonInt']         = "Value needs to be numeric";
$GLOBALS['strRecordWasNotInserted'] = "Record was not inserted";
$GLOBALS['strWrongColumnPart1']     = "<br>Error in CSV file! Column <b>";
$GLOBALS['strWrongColumnPart2']     = "</b> is not allowed for this tracker";
$GLOBALS['strMissingColumnPart1']   = "<br>Error in CSV file! Column <b>";
$GLOBALS['strMissingColumnPart2']   = "</b> is missing";
$GLOBALS['strYouHaveNoTrackers']    = "Advertiser has no trackers!";
$GLOBALS['strYouHaveNoCampaigns']   = "Advertiser has no campaigns!";
$GLOBALS['strYouHaveNoBanners']     = "Campaign has no banners!";
$GLOBALS['strYouHaveNoZones']       = "Banner not linked to any zones!";
$GLOBALS['strNoBannersDropdown']    = "--No Banners Found--";
$GLOBALS['strNoZonesDropdown']      = "--No Zones Found--";
$GLOBALS['strInsertErrorPart1']     = "<br><br><center><b> Error, ";
$GLOBALS['strInsertErrorPart2']     = "records was not inserted! </b></center>";
$GLOBALS['strDuplicatedValue']      = "Duplicated Value!";
$GLOBALS['strInsertCorrect']        = "<br><br><center><b> File was uploaded correctly </b></center>";
$GLOBALS['strReuploadCsvFile']      = "Reupload CSV File";
$GLOBALS['strConfirmUpload']        = "Confirm Upload";
$GLOBALS['strLoadedRecords']        = "Loaded Records";
$GLOBALS['strBrokenRecords']        = "Broken Fields in all Records";
$GLOBALS['strWrongDateFormat']      = "Wrong Date Format";


// Password recovery
$GLOBALS['strForgotPassword']         = "忘记密码";
$GLOBALS['strPasswordRecovery']       = "Password recovery";
$GLOBALS['strEmailRequired']          = "Email is a required field";
$GLOBALS['strPwdRecEmailSent']        = "Recovery email sent";
$GLOBALS['strPwdRecEmailNotFound']    = "Email address not found";
$GLOBALS['strPwdRecPasswordSaved']    = "The new password was saved, proceed to <a href='index.php'>login</a>";
$GLOBALS['strPwdRecWrongId']          = "Wrong ID";
$GLOBALS['strPwdRecEnterEmail']       = "Enter your email address below";
$GLOBALS['strPwdRecEnterPassword']    = "Enter your new password below";
$GLOBALS['strPwdRecReset']            = "Password reset";
$GLOBALS['strPwdRecResetLink']        = "Password reset link";
$GLOBALS['strPwdRecResetPwdThisUser'] = "Reset password for this user";
$GLOBALS['strPwdRecEmailPwdRecovery'] = "%s password recovery";
$GLOBALS['strProceed']                = "Proceed >";
$GLOBALS['strNotifyPageMessage']      = "An e-mail has been sent to you, which includes a link that will allow you
                                         to re-set your password and log in.<br />Please allow a few minutes for the e-mail to arrive.<br />
                                         If you do not receive the e-mail, please check your spam folder.<br />
                                         <a href=\"index.php\">Return the the main login page.</a>";

// Audit
$GLOBALS['strAdditionalItems']        = "and additional items";
$GLOBALS['strFor']                    = "for";
$GLOBALS['strHas']                    = "has";
$GLOBALS['strAdZoneAsscociation']     = "Ad Zone Association";
$GLOBALS['strBinaryData']             = "Binary data";
$GLOBALS['strAuditTrailDisabled']     = "Audit Trail has been disabled by administrator. No further events are logged and shown in Audit Trail list.";
$GLOBALS['strAccount']                  = "Account";
$GLOBALS['strAccountUserAssociation']   = "Account User Association";
$GLOBALS['strEvent']                    = "Event";
$GLOBALS['strImage']                    = "Image";
$GLOBALS['strCampaignZoneAssociation']      = "Campaign Zone Association";
$GLOBALS['strAccountPreferenceAssociation'] = "Account Preference Association";


// Widget - Audit
$GLOBALS['strAuditNoData']            = "No user activity has been recorded during the timeframe you have selected.";
$GLOBALS['strAuditTrail']             = "Audit Trail";
$GLOBALS['strAuditTrailSetup']          = "Setup the Audit Trail today";
$GLOBALS['strAuditTrailGoTo']           = "Go to Audit Trail page";
$GLOBALS['strAuditTrailNotEnabled']     = "<li>Audit Trail allows you to see who did what and when. Or to put it another way, it keeps track of system changes within " . MAX_PRODUCT_NAME ."</li>
        <li>You are seeing this message, because you have not activated the Audit Trail</li>
        <li>Interested in learning more? Read the <a href='".OX_PRODUCT_DOCSURL."/settings/auditTrail' class='site-link' target='help' >Audit Trail documentation</a></li>";

// Widget - Campaign
$GLOBALS['strCampaignGoTo']             = "Go to Campaigns page";
$GLOBALS['strCampaignSetUp']            = "Set up a Campaign today";
$GLOBALS['strCampaignNoRecords']        = "<li>Campaigns let you group together any number of banner ads, of any size, that share common advertising requirements</li>
        <li>Save time by grouping banners within a campaign and no longer define delivery settings for each ad separately</li>
        <li>Check out the <a class='site-link' target='help' href='".OX_PRODUCT_DOCSURL."/inventory/advertisersAndCampaigns/campaigns'>Campaign documentation</a>!</li>
";
$GLOBALS['strCampaignNoRecordsAdmin']   = "<li>There is no campaign activity to display.</li>";

$GLOBALS['strCampaignNoDataTimeSpan']    = "No campaigns have started or finished during the timeframe you have selected";
$GLOBALS['strCampaignAuditNotActivated'] = "<li>In order to view campaigns which have started or finished during the timeframe you have selected, the Audit Trail must be activated</li>
        <li>You are seeing this message because you didn't activate the Audit Trail</li>
";
$GLOBALS['strCampaignAuditTrailSetup']   = "Activate Audit Trail to start viewing Campaigns";

$GLOBALS['strUnsavedChanges']       = "You have unsaved changes on this page, make sure you press &quot;Save Changes&quot; when finished";
$GLOBALS['strDeliveryLimitationsDisagree'] = "WARNING: The delivery engine limitations <strong>DO NOT AGREE</strong> with the limitations shown below<br />Please hit save changes to update the delivery engine's rules";
$GLOBALS['strDeliveryLimitationsInputErrors'] = "Some of delivery limitations reports incorrect values:";

//confirmation messages
$GLOBALS['strYouAreNowWorkingAsX'] = "您已经成功切换到<b>%s</b>组。";
$GLOBALS['strYouDontHaveAccess'] = "没有权限访问该页面，已经为您重定向。";

$GLOBALS['strAdvertiserHasBeenAdded'] = "新客户<a href='%s'>%s</a>已经成功添加，现在可以<a href='%s'>添加新项目</a>。";
$GLOBALS['strAdvertiserHasBeenUpdated'] = "客户<a href='%s'>%s</a>已经成功更新。";
$GLOBALS['strAdvertiserHasBeenDeleted'] = "客户<b>%s</b>已经成功删除。";
$GLOBALS['strAdvertisersHaveBeenDeleted'] = "所有选中的客户已经成功删除。";

$GLOBALS['strTrackerHasBeenAdded'] = "新追踪器<a href='%s'>%s</a>已经成功添加。";
$GLOBALS['strTrackerHasBeenUpdated'] = "追踪器<a href='%s'>%s</a>已经成功更新。";
$GLOBALS['strTrackerVarsHaveBeenUpdated'] = "追踪器<a href='%s'>%s</a>的变量已经成功更新。";
$GLOBALS['strTrackerCampaignsHaveBeenUpdated'] = "追踪器<a href='%s'>%s</a>关联的所有项目已经成功更新。";
$GLOBALS['strTrackerAppendHasBeenUpdated'] = "追踪器<a href='%s'>%s</a>的附加追踪代码已经成功更新。";
$GLOBALS['strTrackerHasBeenDeleted'] = "追踪器<b>%s</b>已经成功删除。";
$GLOBALS['strTrackersHaveBeenDeleted'] = "所有选中的追踪器已经成功删除。";
$GLOBALS['strTrackerHasBeenDuplicated'] = "已经成功从<a href='%s'>%s</a>克隆出新的追踪器<a href='%s'>%s</a>。";
$GLOBALS['strTrackerHasBeenMoved'] = "追踪器<b>%s</b>已经成功移至客户<b>%s</b>。";

$GLOBALS['strCampaignHasBeenAdded'] = "新项目<a href='%s'>%s</a>已经成功添加，现在可以<a href='%s'>添加新素材</a>。";
$GLOBALS['strCampaignHasBeenNoBanner'] = "新项目<a href='%s'>%s</a>已经成功添加。";
$GLOBALS['strCampaignHasBeenUpdated'] = "项目<a href='%s'>%s</a>已经成功更新。";
$GLOBALS['strCampaignTrackersHaveBeenUpdated'] = "项目<a href='%s'>%s</a>关联的所有追踪器已经成功更新。";
$GLOBALS['strCampaignHasBeenDeleted'] = "项目<b>%s</b>已经成功删除。";
$GLOBALS['strCampaignsHaveBeenDeleted'] = "所有选中的项目已经成功删除。";
$GLOBALS['strCampaignHasBeenDuplicated'] = "已经成功从<a href='%s'>%s</a>克隆出新的项目<a href='%s'>%s</a>。";
$GLOBALS['strCampaignHasBeenMoved'] = "项目<b>%s</b>已经成功移至客户<b>%s</b>。";

$GLOBALS['strBannerHasBeenAdded'] = "新素材<a href='%s'>%s</a>已经成功添加。";
$GLOBALS['strBannerHasBeenUpdated'] = "素材<a href='%s'>%s</a>已经成功更新。";
$GLOBALS['strBannerAdvancedHasBeenUpdated'] = "素材<a href='%s'>%s</a>的高级设置已经成功更新。";
$GLOBALS['strBannerAclHasBeenUpdated'] = "素材<a href='%s'>%s</a>的投放控制条件已经成功更新。";
$GLOBALS['strBannerAclHasBeenAppliedTo'] = "素材<a href='%s'>%s</a>的投放控制条件已经成功应用到 %d 个素材。";
$GLOBALS['strBannerHasBeenDeleted'] = "素材<b>%s</b>已经成功删除。";
$GLOBALS['strBannersHaveBeenDeleted'] = "所有选中的素材已经成功删除。";
$GLOBALS['strBannerHasBeenDuplicated'] = "已经成功从<a href='%s'>%s</a>克隆出新的素材<a href='%s'>%s</a>。";
$GLOBALS['strBannerHasBeenMoved'] = "素材<b>%s</b>已经成功移至项目<b>%s</b>。";
$GLOBALS['strBannerHasBeenActivated'] = "素材<a href='%s'>%s</a>已经成功启用。";
$GLOBALS['strBannerHasBeenDeactivated'] = "素材<a href='%s'>%s</a>已经成功停用。";

$GLOBALS['strXZonesLinked'] = "<b>%s</b> 个版位已经成功关联";
$GLOBALS['strXZonesUnlinked'] = "<b>%s</b> 个版位已经成功解除关联";

$GLOBALS['strWebsiteHasBeenAdded'] = "新媒体<a href='%s'>%s</a>已经成功添加，现在可以<a href='%s'>添加新版位</a>。";
$GLOBALS['strWebsiteHasBeenUpdated'] = "媒体<a href='%s'>%s</a>已经成功更新。";
$GLOBALS['strWebsiteHasBeenDeleted'] = "媒体<b>%s</b>已经成功删除。";
$GLOBALS['strWebsitesHaveBeenDeleted'] = "所有选中的媒体已经成功删除。";

$GLOBALS['strZoneHasBeenAdded'] = "版位<a href='%s'>%s</a>已经成功添加。";
$GLOBALS['strZoneHasBeenUpdated'] = "版位<a href='%s'>%s</a>已经成功更新。";
$GLOBALS['strZoneAdvancedHasBeenUpdated'] = "版位<a href='%s'>%s</a>的高级设置已经成功更新。";
$GLOBALS['strZoneHasBeenDeleted'] = "版位<b>%s</b>已经成功删除。";
$GLOBALS['strZonesHaveBeenDeleted'] = "所有选中的版位已经成功删除。";
$GLOBALS['strZoneHasBeenDuplicated'] = "已经成功从<a href='%s'>%s</a>克隆出新的版位<a href='%s'>%s</a>。";
$GLOBALS['strZoneHasBeenMoved'] = "版位<b>%s</b>已经成功移至媒体<b>%s</b>。";
$GLOBALS['strZoneLinkedBanner'] = "素材已经成功关联到版位<a href='%s'>%s</a>。";
$GLOBALS['strZoneLinkedCampaign'] = "项目已经成功关联到版位<a href='%s'>%s</a>。";
$GLOBALS['strZoneRemovedBanner'] = "素材已经成功从版位<a href='%s'>%s</a>解除关联。";
$GLOBALS['strZoneRemovedCampaign'] = "项目已经成功从版位<a href='%s'>%s</a>解除关联。";

$GLOBALS['strChannelHasBeenAdded'] = "新频道<a href='%s'>%s</a>已经成功添加，现在可以<a href='%s'>更新投放选项</a>。";
$GLOBALS['strChannelHasBeenUpdated'] = "频道<a href='%s'>%s</a>已经成功更新。";
$GLOBALS['strChannelAclHasBeenUpdated'] = "频道<a href='%s'>%s</a>的投放选项已经成功更新。";
$GLOBALS['strChannelHasBeenDeleted'] = "频道<b>%s</b>已经成功删除。";
$GLOBALS['strChannelsHaveBeenDeleted'] = "所有选中的频道已经成功删除。";
$GLOBALS['strChannelHasBeenDuplicated'] = "已经成功从<a href='%s'>%s</a>克隆出新的频道<a href='%s'>%s</a>。";

$GLOBALS['strUserPreferencesUpdated'] = "您的<b>%s</b>已经成功更新。";
$GLOBALS['strPreferencesHaveBeenUpdated'] = "设置已经成功更新。";
$GLOBALS['strEmailChanged'] = "您的 E-mail 已经成功更新。";
$GLOBALS['strPasswordChanged'] = "您的密码已经成功更新。";
$GLOBALS['strXPreferencesHaveBeenUpdated'] = "<b>%s</b>已经成功更新。";
$GLOBALS['strXSettingsHaveBeenUpdated'] = "<b>%s</b>已经成功更新。";
$GLOBALS['strTZPreferencesWarning'] = "但是项目的启用和停用日期以及基于时间的投放控制条件还没有更新。<br />如果您希望对它们应用新的时区设置，您需要手动更新。";


/*-------------------------------------------------------*/
/* Keyboard shortcut assignments                         */
/*-------------------------------------------------------*/

// Reserved keys
// Do not change these unless absolutely needed
$GLOBALS['keyHome']            = "h";
$GLOBALS['keyUp']            = "u";
$GLOBALS['keyNextItem']        = ".";
$GLOBALS['keyPreviousItem']    = ",";
$GLOBALS['keyList']            = "l";

// Other keys
// Please make sure you underline the key you
// used in the string in default.lang.php
$GLOBALS['keySearch']        = "s";
$GLOBALS['keyCollapseAll']    = "c";
$GLOBALS['keyExpandAll']    = "e";
$GLOBALS['keyAddNew']        = "n";
$GLOBALS['keyNext']            = "n";
$GLOBALS['keyPrevious']        = "p";
$GLOBALS['keyLinkUser']        = "u";
$GLOBALS['keyWorkingAs']        = "w";

// Market entities
$GLOBALS['strMarketCampaignOptin'] = "OpenX Market - Opted In Campaigns";
$GLOBALS['strMarketZoneOptin'] = "OpenX Market - Zone Default Ads";
$GLOBALS['strMarketZoneBeforeOpenX2.8.4'] = "OpenX Market ads before OpenX 2.8.4";

/*-------------------------------------------------------*/
/* Languages Names                                       */
/*-------------------------------------------------------*/

$GLOBALS['str_ar']                  = "阿拉伯语";
$GLOBALS['str_bg']                  = "保加利亚语";
$GLOBALS['str_cs']                  = "捷克语";
$GLOBALS['str_cy']                  = "威尔士语";
$GLOBALS['str_da']                  = "丹麦语";
$GLOBALS['str_de']                  = "德语";
$GLOBALS['str_el']                  = "希腊语";
$GLOBALS['str_en']                  = "英语";
$GLOBALS['str_es']                  = "西班牙语";
$GLOBALS['str_fa']                  = "波斯语";
$GLOBALS['str_fr']                  = "法语";
$GLOBALS['str_he']                  = "希伯来语";
$GLOBALS['str_hr']                  = "克罗地亚语";
$GLOBALS['str_hu']                  = "匈牙利语";
$GLOBALS['str_id']                  = "印度尼西亚语";
$GLOBALS['str_it']                  = "意大利语";
$GLOBALS['str_ja']                  = "日语";
$GLOBALS['str_ko']                  = "韩语";
$GLOBALS['str_lt']                  = "立陶宛语";
$GLOBALS['str_ms']                  = "马来语";
$GLOBALS['str_nb']                  = "挪威语";
$GLOBALS['str_nl']                  = "荷兰语";
$GLOBALS['str_pl']                  = "波兰语";
$GLOBALS['str_pt_BR']               = "巴西葡萄牙语";
$GLOBALS['str_pt_PT']               = "葡萄牙语";
$GLOBALS['str_ro']                  = "罗马尼亚语";
$GLOBALS['str_ru']                  = "俄语";
$GLOBALS['str_sk']                  = "斯洛伐克语";
$GLOBALS['str_sl']                  = "斯洛文尼亚语";
$GLOBALS['str_sq']                  = "阿尔巴尼亚语";
$GLOBALS['str_sv']                  = "瑞典语";
$GLOBALS['str_tr']                  = "土耳其语";
$GLOBALS['str_uk']                  = "乌克兰语";
$GLOBALS['str_zh_CN']               = "简体中文";
$GLOBALS['str_zh_TW']               = "繁体中文";

?>
