<?php
/**
 * @name EOLINKER ams open source，EOLINKER open source version
 * @link https://global.eolinker.com/
 * @package EOLINKER
 * @author www.eolinker.com eoLinker Ltd.co 2015-2018
 * 
 * eoLinker is the world's leading and domestic largest online API interface management platform, providing functions such as automatic generation of API documents, API automated testing, Mock testing, team collaboration, etc., aiming to solve the problem of low development efficiency caused by separation of front and rear ends.
 * If you have any problems during the process of use, please join the user discussion group for feedback, we will solve the problem for you with the fastest speed and best service attitude.
 *
 * 
 *
 * Website：https://global.eolinker.com/
 * Slack：eolinker.slack.com
 * facebook：@EoLinker
 * twitter：@eoLinker
 */
class GuestModule
{
    /**
     * Check Login
     */
    public function checkLogin()
    {
        @session_start();
        if (isset($_SESSION['userID']))
            return $_SESSION['userName'];
        else
            return FALSE;
    }

    /**
     * User Register
     * @param $userName string UserName
     * @param $loginPassword string Password
     * @param $userNickName string UserNickName
     * @return bool
     */
    public function register(&$userName, &$loginPassword, $userNickName)
    {
        $hashPassword = md5($loginPassword);
        $dao = new GuestDao;
        $nameList = array("Aaron", "Abbott", "Bard", "Barlow", "Caesar", "Calvin", "Daniel", "Darren", "Edison", "Elmo", "Fion", "Fitch", "Gale", "Galen", "Haley", "Hamiltion", "Ingemar", "Ignatius", "Jacob", "Jafar", "Kenya", "Lennon", "Malcolm", "Nathaniel", "Oscar", "Parker", "Quennel", "Randolph", "Santiago", "Theobald", "Ulysses", "Valentine", "Waldo", "Xavier", "Yehudi", "Zachary", "Zavier", "Zebulon", "Ziv");
        $nickName = (!empty($userNickName)) ? $userNickName : '[Random]' . $nameList[rand(0, 38)];

        if ($userID = $dao->register($userName, $hashPassword, $nickName)) {
            $demoProject = '{"projectInfo":{"projectID":0,"projectType":0,"projectName":"eoinker\u793a\u4f8b","projectUpdateTime":"2016-11-08 23:04:48","projectPassword":"","isLocked":0,"projectVersion":"1.2"},"apiGroupList":[{"groupID":275,"groupName":"demo","projectID":582,"apiList":[{"baseInfo":{"apiID":623,"apiName":"\u793a\u4f8b\u63a5\u53e3","apiURI":"www.eolinker.com","apiProtocol":0,"apiFailureMock":"","apiSuccessMock":"{\"type\":\"demo\",\"status\":\"success\",\"desc\":\"\u8fd9\u662f\u8fd4\u56de\u7ed3\u679c\u7684\u793a\u4f8b\uff0c\u60a8\u53ef\u4ee5\u5728\u6b64\u8bb0\u5f55\u60a8\u7684\u63a5\u53e3\u7684\u8fd4\u56de\u503c\u793a\u4f8b\uff0c\u65b9\u4fbf\u5bf9\u63a5\u4eba\u5458\u67e5\u770b\u3002\u540c\u65f6\u6211\u4eec\u63d0\u4f9b\u4e86\u591a\u79cd\u683c\u5f0f\u6574\u7406\u529f\u80fd\uff0c\u60a8\u53ea\u9700\u8981\u8f7b\u8f7b\u4e00\u70b9\u5373\u53ef\u5f97\u5230\u7f8e\u5316\u7248\u672c\u7684\u8fd4\u56de\u7ed3\u679c\uff0c\u975e\u5e38\u65b9\u4fbf\uff01\"}","apiRequestType":0,"apiStatus":0,"apiUpdateTime":"2016-11-08 23:04:48","groupID":275,"projectID":582,"starred":0,"removed":0,"removeTime":null,"apiNoteType":1,"apiNoteRaw":"####  \u6211\u53ef\u4ee5\u4f7f\u7528\u5bcc\u6587\u672c\u6216\u8005markdown\u7f16\u8f91\u5668\u53bb\u8fdb\u884c\u5907\u6ce8\u7684\u5199\u4f5c\u3002","apiNote":"&lt;h4 id=&quot;h4--markdown-&quot;&gt;&lt;a name=&quot;\u6211\u53ef\u4ee5\u4f7f\u7528\u5bcc\u6587\u672c\u6216\u8005markdown\u7f16\u8f91\u5668\u53bb\u8fdb\u884c\u5907\u6ce8\u7684\u5199\u4f5c\u3002&quot; class=&quot;reference-link&quot;&gt;&lt;\/a&gt;&lt;span class=&quot;header-link octicon octicon-link&quot;&gt;&lt;\/span&gt;\u6211\u53ef\u4ee5\u4f7f\u7528\u5bcc\u6587\u672c\u6216\u8005markdown\u7f16\u8f91\u5668\u53bb\u8fdb\u884c\u5907\u6ce8\u7684\u5199\u4f5c\u3002&lt;\/h4&gt;","apiRequestParamType":0,"apiRequestRaw":"","mockCode":"AbKWQJuEZqQni9Hdpz2wYVEGl9qavDj2"},"headerInfo":[{"headerID":562,"headerName":"Accept-Encoding","headerValue":"compress, gzip"},{"headerID":563,"headerName":"\u8bf7\u6c42\u5934\u90e8\u7684\u6807\u7b7e","headerValue":"\u8fd9\u91cc\u53ef\u4ee5\u8bb0\u5f55\u5b8c\u6574\u7684\u5934\u90e8\u4fe1\u606f"}],"requestInfo":[{"paramID":11288,"paramName":"\u53c2\u6570\u793a\u4f8b1","paramKey":"param1","paramType":0,"paramLimit":"\u6570\u5b57\u3001\u82f1\u6587\u3001\u4e0b\u5212\u7ebf","paramValue":"eoapi_2016","paramNotNull":0,"paramValueList":[]},{"paramID":11289,"paramName":"\u53c2\u6570\u793a\u4f8b2","paramKey":"param2","paramType":0,"paramLimit":"\u8fd9\u91cc\u53ef\u4ee5\u8bb0\u5f55\u53c2\u6570\u7684\u9650\u5236\u6761\u4ef6\uff0c\u6bd4\u59820~3\u7684\u6570\u5b57","paramValue":"0","paramNotNull":1,"paramValueList":[{"valueID":1562,"value":"0","valueDescription":"\u53ef\u80fd1\uff0c\u4ee3\u8868x"},{"valueID":1563,"value":"1","valueDescription":"\u53ef\u80fd2\uff0c\u4ee3\u8868y"},{"valueID":1564,"value":"2","valueDescription":"\u53ef\u80fd3\uff0c\u4ee3\u8868z"},{"valueID":1565,"value":"3","valueDescription":"\u53ef\u80fd4\uff0c\u4ee3\u8868\u03b1"}]},{"paramID":11290,"paramName":"\u4e8c\u7ea7\u53c2\u6570\u793a\u4f8b","paramKey":"param2>>param3","paramType":0,"paramLimit":"","paramValue":"","paramNotNull":0,"paramValueList":[]}],"resultInfo":[{"paramID":10665,"paramKey":"desc","paramName":"\u8bf4\u660e","paramNotNull":1,"paramValueList":[{"valueID":9352,"value":"*","valueDescription":"\u4f60\u6ce8\u610f\u5230\u4e86\u4e48\uff0c\u8fd9\u662f\u4e00\u4e2a\u201c\u975e\u5fc5\u542b\u201d\u7684\u8fd4\u56de\u7ed3\u679c\uff0ceoapi\u751a\u81f3\u53ef\u4ee5\u8bb0\u5f55\u8fd4\u56de\u7ed3\u679c\u662f\u5426\u8fd4\u56de\uff01"}]},{"paramID":10666,"paramKey":"status","paramName":"\u63a5\u53e3\u8bf7\u6c42\u72b6\u6001","paramNotNull":0,"paramValueList":[{"valueID":9353,"value":"error","valueDescription":"\u9519\u8bef"},{"valueID":9354,"value":"failure","valueDescription":"\u5931\u8d25"},{"valueID":9355,"value":"success","valueDescription":"\u6210\u529f\uff0c\u4e0d\u4ec5\u8bf7\u6c42\u7684\u53c2\u6570\u53ef\u4ee5\u8bb0\u5f55\u53ef\u80fd\u6027\uff0c\u8fde\u8fd4\u56de\u503c\u7684\u4e5f\u53ef\u4ee5\u8bb0\u5f55\u53ef\u80fd\u6027\uff01"}]},{"paramID":10667,"paramKey":"type","paramName":"\u63a5\u53e3\u7c7b\u578b","paramNotNull":0,"paramValueList":[{"valueID":9356,"value":"demo","valueDescription":""}]},{"paramID":10668,"paramKey":"type::secondType","paramName":"\u4e8c\u7ea7\u8fd4\u56de\u7ed3\u679c\u793a\u4f8b","paramNotNull":0,"paramValueList":[{"valueID":9357,"value":"0","valueDescription":"success"},{"valueID":9358,"value":"1","valueDescription":"failure"}]}]}]}]}';
            $demoProject = json_decode($demoProject, TRUE);
            $importDao = new ImportDao;
            $importDao->importEoapi($demoProject, $userID);
            return TRUE;
        } else
            return FALSE;
    }

    /**
     * Check User Name
     * @param $userName string UserName
     * @return bool
     */
    public function checkUserNameExist(&$userName)
    {
        $dao = new GuestDao;
        return $dao->checkUserNameExist($userName);
    }

    /**
     * Login
     * @param $loginName string Login username
     * @param $loginPassword string Login password
     * @return bool
     */
    public function login(&$loginName, &$loginPassword)
    {
        $time = time();
        $dao = new GuestDao;
        $userInfo = $dao->getLoginInfo($loginName);
        if (md5($loginPassword) == $userInfo['userPassword']) {
            @session_start();
            $_SESSION['userID'] = $userInfo['userID'];
            $_SESSION['userName'] = $userInfo['userName'];
            $_SESSION['userNickName'] = $userInfo['userNickName'];
            return TRUE;
        } else
            return FALSE;
    }

}

?>