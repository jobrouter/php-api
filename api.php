<?php

/** This file has been generated automatically **/

namespace JobRouter\Engine\Runtime\PhpFunction { if(false) { 
    abstract class AbstractFunction implements \Psr\Log\LoggerInterface, \JobRouter\Engine\Runtime\PhpFunction\AbstractFunctionInterface
    {
        use \JobRouter\Log\LogTrait;
        /**
         * Returns the name of the PHP function.
         *
         * @return string
         */
        public final function getName()
        {
        }
        /**
         * Returns the JobRouter DB connection.
         *
         * @return JobDB
         */
        public final function getJobDB()
        {
        }
        /**
         * Generates and returns a globally unique identifier (GUID).
         *
         * @return string Globally unique identifier (GUID)
         */
        public final function getGUID()
        {
        }
        /**
         * Returns date in YYYY-MM-DD HH:II:SS format.
         *
         * @param int $dateFormat Format id of input date format (possible values: 1 - 4)
         * @param string $date Date value
         * @param bool $includeTime Flag indicating if time should be appended to date
         *
         * @return string Date in YYYY-MM-DD HH:II:SS format
         */
        public final function getUnformattedDate($dateFormat, $date, $includeTime = false)
        {
        }
        /**
         * Returns formatted date according to requested date format.
         *
         * @param int $id ID of output date format (possible values: 1 - 4)
         * @param mixed $date Date value (false, if current date should be used)
         * @param bool $isTimestamp Flag indicating that date value is a timestamp
         * @param bool $fullDateTime Flag indicating if time should be appended to date
         * @param string $timezone Target timezone
         *
         * @return string Date in requested format
         */
        public final function getFormattedDate($id, $date = false, $isTimestamp = false, $fullDateTime = false, $timezone = '')
        {
        }
        /**
         * Removes the given directory including all subdirectories and files.
         *
         * @param string $path Path of directory to delete
         *
         * @return bool true on success, false on error
         */
        public final function removeDir($path)
        {
        }
        /**
         * Returns a UNIX timestamp for a given date.
         *
         * @param string $date Date in YYYY-MM-DD HH:II:SS format
         *
         * @return int Date as UNIX timestamp
         */
        public final function getTimestamp($date)
        {
        }
        /**
         * Returns full path of file in data folder.
         *
         * @param string $path Relative path or filename
         * @param string $processName Process name
         * @param string $processVersion Process version
         *
         * @return string Full path of file in data folder
         */
        public final function getFullDataPath($path = '', $processName = '', $processVersion = '')
        {
        }
        /**
         * Returns full path of file in functions folder.
         *
         * @param string $path Relative path or filename
         * @param string $processName Process name
         * @param string $processVersion Process version
         *
         * @return string Full path of file in functions folder
         */
        public final function getFullFunctionsPath($path = '', $processName = '', $processVersion = '')
        {
        }
        /**
         * Returns full path of output folder.
         *
         * @return string Full path of output folder
         */
        public final function getFullOutputPath()
        {
        }
        /**
         * Returns full path of temp folder.
         *
         * @return string Full path of temp folder
         */
        public final function getFullTempPath()
        {
        }
        /**
         * Returns full path of attached file.
         *
         * @param string $path Relative path (i.e. value from processtable)
         *
         * @return string Full path of attached file
         */
        public final function getFullUploadPath($path = '')
        {
        }
        /**
         * Returns the complete URL for opening the step with the given workflowid by the given user.
         *
         * @param string $workflowId Workflowid of the step
         * @param string $userName Username
         *
         * @return string Complete URL for opening the step
         */
        public final function getStepUrl($workflowId, $userName = '')
        {
        }
        /**
         * Returns the complete URL for opening the incident history with the given processid by the given user.
         *
         * @param string $processId Processid of the incident
         * @param string $userName Username
         *
         * @return string Complete URL for opening the incident history
         */
        public final function getIncidentUrl($processId, $userName = '')
        {
        }
        /**
         * Returns the JobRouter default timezone.
         *
         * @return string Default timezone
         *
         * @throws JobRouterException
         */
        public final function getDefaultTimezone()
        {
        }
        /**
         * Returns the timezone of the given user.
         *
         * @param string $userName Username
         *
         * @return string User timezone
         *
         * @throws JobRouterException
         */
        public final function getUserTimezone($userName)
        {
        }
        /**
         * Converts the given date value from user timezone to default timezone.
         *
         * @param string $dateTimeValueInUserTimezone Date in YYYY-MM-DD HH:II:SS format
         * @param string $userTimezone User timezone
         *
         * @return string Date value converted to default timezone in YYYY-MM-DD HH:II:SS format
         *
         * @throws JobRouterException
         */
        public final function convertToDefaultTimezone($dateTimeValueInUserTimezone, $userTimezone)
        {
        }
        /**
         * Converts the given date value from default timezone to user timezone.
         *
         * @param string $dateTimeValueInDefaultTimezone Date in YYYY-MM-DD HH:II:SS format
         * @param string $userTimezone User timezone
         *
         * @return string Date value converted to user timezone in YYYY-MM-DD HH:II:SS format
         *
         * @throws JobRouterException
         */
        public final function convertToUserTimezone($dateTimeValueInDefaultTimezone, $userTimezone)
        {
        }
        /**
         * Creates a password hash.
         *
         * @param string $password
         *
         * @return string
         */
        public final function hashPassword($password)
        {
        }
        /**
         * Checks if the given hash matches the given password.
         *
         * @param string $password
         * @param string $hash
         *
         * @return bool
         */
        public final function verifyPassword($password, $hash)
        {
        }
        /**
         * Returns an object which can be used to create URLs for accessing
         * the given JobArchive result list from external applications.
         *
         * @param int $resultListId
         *
         * @return JobArchive_ResultListUrlBuilder
         */
        public final function getJobArchiveResultListUrlBuilder($resultListId)
        {
        }
        /**
         * Returns the filename converted with the current platform encoding
         *
         * @param string $filename Filename to convert
         *
         * @return string
         */
        public function getFilesystemFilename($filename) : string
        {
        }
    }
    abstract class AbstractStepFunction extends \JobRouter\Engine\Runtime\PhpFunction\AbstractFunction implements \JobRouter\Engine\Runtime\PhpFunction\AbstractStepFunctionInterface
    {
        /**
         * Returns the current process name.
         *
         * @return string Process name
         */
        public final function getProcessName()
        {
        }
        /**
         * Returns the current process version.
         *
         * @return string Process version
         */
        public final function getVersion()
        {
        }
        /**
         * Returns the number of the current step.
         *
         * @return int Step number
         */
        public final function getStep()
        {
        }
        /**
         * Returns the jobfunction of the current step.
         *
         * @return string Jobfunction
         */
        public final function getJobFunction()
        {
        }
        /**
         * Returns the username of the current step.
         *
         * @return string Username
         */
        public final function getUsername()
        {
        }
        /**
         * Returns the current username.
         *
         * @return string current username
         */
        public final function getCurrentUsername()
        {
        }
        /**
         * Returns the initiator of the current incident.
         *
         * @return string Initiator username
         */
        public final function getInitiator()
        {
        }
        /**
         * Returns the number of the current incident.
         *
         * @return int Incident number
         */
        public final function getIncident()
        {
        }
        /**
         * Returns the label of the current step.
         *
         * @return string Step label
         * @throws JobRouterException
         */
        public final function getStepLabel()
        {
        }
        /**
         * Returns the Process Id of the current incident.
         *
         * @return string Process Id
         */
        public final function getProcessId()
        {
        }
        /**
         * Returns the Workflow Id of the current step.
         *
         * @return string Workflow Id
         */
        public final function getWorkflowId()
        {
        }
        /**
         * Returns the Process Step Id of the current step.
         *
         * @return string Process Step Id
         */
        public final function getStepId()
        {
        }
        /**
         * Returns the start date of the current incident.
         *
         * @return int Incident start date
         */
        public final function getStartDate()
        {
        }
        /**
         * Returns the escalation date of the current incident.
         *
         * @return int Incident escalation date
         */
        public final function getIncidentEscalationDate()
        {
        }
        /**
         * Returns the indate of the current step.
         *
         * @return int Step indate
         */
        public final function getInDate()
        {
        }
        /**
         * Returns the escalation date of the current step.
         *
         * @return int Step escalation date
         */
        public final function getStepEscalationDate()
        {
        }
        /**
         * Returns the value of an attribute of the current step or incident.
         *
         * @param string $attributeName Attribute name
         *
         * @return mixed Incident or step attribute value
         *
         * @throws JobRouterException
         */
        public final function getIncidentValue($attributeName)
        {
        }
        /**
         * Checks if simulation mode is active for the current incident.
         *
         * @return bool true, if incident is in simulation mode, otherwise false
         */
        public final function isSimulation()
        {
        }
        /**
         * Returns a process message.
         *
         * @param string $messageName Message name
         * @param string $languageName Language name
         * @param array $replacements Associative array with values for variables contained in process message
         *
         * @return string Process message
         *
         * @throws JobRouterException
         */
        public final function getMessage($messageName, $languageName = '', array $replacements = null)
        {
        }
        /**
         * Returns a configuration value.
         *
         * @param string $configurationName Configuration name
         *
         * @return string Configuration value
         *
         * @throws JobRouterException
         */
        public final function getConfiguration($configurationName)
        {
        }
        /**
         * Returns a dialog element value.
         *
         * @param string $dialogElementName Dialog element name
         *
         * @return string Value of the dialog element
         * @throws JobRouterException
         */
        public function getDialogValue($dialogElementName)
        {
        }
        /**
         * Returns a processtable field value.
         *
         * @param string $fieldName Field name
         * @param bool $rawValue Flag indicating that value should be returned "raw"
         *
         * @return mixed Value of the processtable field
         * @throws JobRouterException
         */
        public final function getTableValue($fieldName, $rawValue = false)
        {
        }
        /**
         * Sets a processtable field value.
         *
         * @param string $fieldName Field name
         * @param mixed $fieldValue New value
         *
         * @return void
         * @throws JobRouterException
         */
        public final function setTableValue($fieldName, $fieldValue)
        {
        }
        /**
         * Returns a previous procestable field value (i. e. the value of a procestable field from the previous step).
         *
         * @param string $fieldName Field name
         * @param bool $rawValue Flag indicating that value should be returned "raw"
         *
         * @return mixed Value of the procestable field
         * @throws JobRouterException
         */
        public final function getOldTableValue($fieldName, $rawValue = false)
        {
        }
        /**
         * Returns a subtable field value.
         *
         * @param string $subtable Subtable name
         * @param int $row Row id
         * @param string $fieldName Field name
         * @param bool $rawValue Flag indicating that value should be returned "raw"
         *
         * @return mixed Value of the subtable field
         * @throws JobRouterException
         */
        public final function getSubtableValue($subtable, $row, $fieldName, $rawValue = false)
        {
        }
        /**
         * Sets a subtable field value.
         *
         * @param string $subtable Subtable name
         * @param int $row Row id
         * @param string $fieldName Field name
         * @param mixed $value New value
         *
         * @return void
         * @throws JobRouterException
         */
        public final function setSubtableValue($subtable, $row, $fieldName, $value)
        {
        }
        /**
         * Returns the number of rows for the given subtable.
         *
         * @param string $subtable Subtable Name
         *
         * @return int Number of rows
         * @throws JobRouterException
         */
        public final function getSubtableCount($subtable)
        {
        }
        /**
         * Return the row ids of the rows of a given subtable for the current step.
         *
         * @param string $subtable Subtable name
         *
         * @return array Subtable row ids
         * @throws JobRouterException
         */
        public final function getSubtableRowIds($subtable)
        {
        }
        /**
         * Deletes a subtable row.
         *
         * @param string $subtable Subtable name
         * @param int $row Row Id
         *
         * @return void
         * @throws JobRouterException
         */
        public final function deleteSubtableRow($subtable, $row)
        {
        }
        /**
         * Inserts a subtable row.
         *
         * @param string $subtable Subtable name
         * @param int $row Row Id
         * @param array $rowData Row data (associative array with subtable field names and field values)
         *
         * @return void
         * @throws JobRouterException
         */
        public final function insertSubtableRow($subtable, $row, array $rowData = null)
        {
        }
        /**
         * Deletes all entries from a subtable.
         *
         * @param string $subtable Subtable name
         * @param bool $deleteAttachedFiles Flag, if true then all attached files in the subtable will also be deleted physically
         *
         * @return void
         *
         * @throws JobRouterException
         */
        public final function clearSubtable($subtable, $deleteAttachedFiles = false)
        {
        }
        /**
         * Returns a database connection.
         *
         * @param string $connectionName Connection name
         *
         * @return JobDB
         *
         * @throws JobRouterException
         */
        public final function getDBConnection($connectionName)
        {
        }
        /**
         * Returns the user language for current step.
         *
         * @return string User language (default process language, if no user step)
         *
         * @throws JobRouterException
         */
        public final function getLanguage()
        {
        }
        /**
         * Attaches a file to the processtable or a subtable.
         *
         * @param string $filepath
         * @param string $fieldname
         * @param int $row
         * @param string $subtable
         *
         * @throws JobRouterException
         */
        public final function attachFile($filepath, $fieldname, $row = 0, $subtable = '')
        {
        }
        /**
         * Deletes a file from the processtable or a subtable.
         *
         * @param string $fieldname
         * @param int $row
         * @param string $subtable
         *
         * @throws JobRouterException
         */
        public final function deleteFile($fieldname, $row = 0, $subtable = '')
        {
        }
        /**
         * Returns the original filename of an attachment.
         *
         * @param string $fieldname Field name
         * @param int $row Subtable row id
         * @param string $subtable Subtable name
         * @param bool $includeFolder Flag indicating if folder should be included
         *
         * @return string original filename, optionally including folder
         *
         * @throws JobRouterException
         */
        public final function getOriginalFilename($fieldname, $row = 0, $subtable = '', $includeFolder = false)
        {
        }
        /**
         * Checks if the current step is a request.
         *
         * @return bool true, if step is a request, otherwise false
         */
        public final function isRequest()
        {
        }
        /**
         * Checks if the current step is an answer for a request.
         *
         * @return bool true, if step is an answer, otherwise false
         */
        public final function isAnswer()
        {
        }
        /**
         * Returns the backlink of the current step.
         *
         * @return string backlink
         */
        public final function getBacklink()
        {
        }
        /**
         * Returns the notice of the current step.
         *
         * @return string Notice
         */
        public final function getNotice()
        {
        }
        /**
         * Returns the 2nd notice of the current step.
         *
         * @return string 2nd notice
         */
        public final function getNotice2()
        {
        }
        /**
         * Returns the priority of the current step.
         *
         * @return int Priority
         */
        public final function getPriority()
        {
        }
        /**
         * Sets the priority of the current step.
         *
         * @param int $priority Priority
         *
         * @return void
         */
        public final function setPriority($priority)
        {
        }
        /**
         * Returns the current subtable name during rule execution.
         *
         * @return string Current subtable name
         */
        public final function getCurrentSubtable()
        {
        }
        /**
         * Returns the current subtable row id during rule execution.
         *
         * @return int Current subtable row id
         */
        public final function getCurrentSubtableRowId()
        {
        }
        /**
         * Returns the input parameter value with the given name.
         *
         * @param string $parameterName Name of the input parameter
         *
         * @return mixed Input parameter value
         * @throws JobRouterException
         */
        public final function getInputParameter($parameterName)
        {
        }
        /**
         * @param $rowId
         *
         * @internal
         * @return mixed
         */
        public function executeForRow($rowId)
        {
        }
        public abstract function execute($rowId = null);
        /**
         * Returns an object which can be used to access the IDM Web service function getResourceList
         *
         * @param string $configurationName Name of web service configuration
         * @param string $submitterId Submitter Id
         *
         * @return IdmWebServiceClient IDM Web Service client
         *
         * @throws JobRouterException
         */
        public final function getIdmWebServiceClient($configurationName, $submitterId)
        {
        }
    }
    abstract class BoxActionFunction extends \JobRouter\Engine\Runtime\PhpFunction\AbstractFunction implements \JobRouter\Engine\Runtime\PhpFunction\BoxActionFunctionInterface
    {
        /**
         * Returns the id of the process box.
         *
         * @return int Process box id
         */
        public final function getBoxId()
        {
        }
        /**
         * Returns the selected box action.
         *
         * @return int Selected box action
         */
        public final function getBoxAction()
        {
        }
        /**
         * Returns the label of the selected box action.
         *
         * @return string Label of the selected box action
         */
        public final function getBoxActionLabel()
        {
        }
        /**
         * Returns the workflowids of the selected steps.
         *
         * @return array Workflowids of the selected steps
         */
        public final function getWorkflowIds()
        {
        }
        /**
         * Returns the username of the user who triggered the box action.
         *
         * @return string Username of the user who triggered the box action
         */
        public final function getUserName()
        {
        }
        /**
         * Returns the unique id for the execution of the box action.
         *
         * @return string Unique id for the execution of the box action
         */
        public final function getCurrentGUID()
        {
        }
        /**
         * Removes the given workflow id from the list of workflow ids of the steps to be sent after execution of the box action.
         *
         * @param string $workflowId
         */
        public final function removeWorkflowId($workflowId)
        {
        }
        /**
         * Returns a step instance for the given workflow id.
         *
         * @param string $workflowId
         *
         * @return Step
         * @throws \JobRouterException
         */
        public final function getStepByWorkflowId($workflowId)
        {
        }
        /**
         * Returns a configuration value.
         *
         * @param string $configurationName Configuration name
         *
         * @return string Configuration value
         *
         * @throws \JobRouterException
         */
        public final function getConfiguration($configurationName)
        {
        }
        /**
         * Returns the process step ids for the selected steps.
         *
         * @return array Process step ids of the selected steps
         * @throws \JobRouterException
         */
        public final function getStepIds()
        {
        }
        /**
         * Adds a message to be shown to the user after execution of the box action.
         *
         * @param string $messageText Message text
         * @param int $messageType Message type (0 = Success, 1 = Info, 2 = Warning, 3 = Error)
         *
         * @throws \JobRouterException
         */
        public final function addMessage($messageText, $messageType = \MessagesManager::MSG_INFO)
        {
        }
        /**
         * Returns the current username.
         *
         * @return string current username
         */
        public final function getCurrentUsername()
        {
        }
        /**
         * Get the value of the given process message in the given language.
         * If no language given, the current user language or the process default language will be used.
         *
         * @param string $messageName Message name
         * @param string|null $languageName Language name
         * @param array|null $replacements Associative array with values for variables contained in process message
         *
         * @return string Process message
         *
         * @throws JobRouterException
         */
        public final function getMessage(string $messageName, ?string $languageName = '', array $replacements = null) : string
        {
        }
        /**
         * Returns the current language. This is the user language or the default process language, if the user language is not available in the process.
         *
         * @return string Language name
         *
         * @throws JobRouterException
         */
        public final function getLanguage() : string
        {
        }
        public abstract function execute();
    }
    abstract class DialogFunction extends \JobRouter\Engine\Runtime\PhpFunction\AbstractStepFunction implements \JobRouter\Engine\Runtime\PhpFunction\DialogFunctionInterface
    {
        /**
         * Saves the current step
         *
         * @throws \JobRouterException
         */
        public final function save()
        {
        }
        /**
         * @internal
         *
         * @param array $parameters
         */
        public final function setParameters(array $parameters)
        {
        }
        /**
         * @internal
         *
         * @param array $dialogValues
         */
        public final function setDialogValues(array $dialogValues)
        {
        }
        /**
         * Returns the value for a userdefined parameter, which was defined in the jr_execute_dialog_function call
         *
         * @param $parameterName
         *
         * @return mixed|null
         */
        public final function getParameter($parameterName)
        {
        }
        /**
         * Sets a custom return value, which can be accessed in the callbacks of jr_execute_dialog_function
         *
         * @param $key
         * @param $returnValue
         */
        public final function setReturnValue($key, $returnValue)
        {
        }
        /**
         * @internal
         */
        public final function getReturnValues()
        {
        }
        /**
         * Returns the value of a dialog element
         *
         * @param string $dialogElementName
         *
         * @return mixed|string
         * @throws \JobRouterException
         */
        public final function getDialogValue($dialogElementName)
        {
        }
    }
    abstract class RuleConditionFunction extends \JobRouter\Engine\Runtime\PhpFunction\AbstractStepFunction implements \JobRouter\Engine\Runtime\PhpFunction\RuleConditionFunctionInterface
    {
        /**
         * Returns a dialog element value.
         *
         * @param string $dialogElementName Dialog element name
         *
         * @return string Value of the dialog element
         */
        public final function getDialogValue($dialogElementName)
        {
        }
    }
    abstract class RuleExecutionFunction extends \JobRouter\Engine\Runtime\PhpFunction\AbstractStepFunction implements \JobRouter\Engine\Runtime\PhpFunction\RuleExecutionFunctionInterface
    {
        /**
         * Returns a dialog element value.
         *
         * @param string $dialogElementName Dialog element name
         *
         * @return string Value of the dialog element
         */
        public final function getDialogValue($dialogElementName)
        {
        }
    }
    abstract class StepInitializationFunction extends \JobRouter\Engine\Runtime\PhpFunction\AbstractStepFunction implements \JobRouter\Engine\Runtime\PhpFunction\StepInitializationFunctionInterface
    {
        /**
         * Returns a dialog element value.
         *
         * @param string $dialogElementName Dialog element name
         *
         * @return string Value of the dialog element
         */
        public final function getDialogValue($dialogElementName)
        {
        }
        /**
         * Saves the current step
         */
        public final function save()
        {
        }
    }
    abstract class SystemActivityFunction extends \JobRouter\Engine\Runtime\PhpFunction\AbstractStepFunction implements \JobRouter\Engine\Runtime\PhpFunction\SystemActivityFunctionInterface
    {
        /**
         * Returns a dialog element value.
         *
         * @param string $dialogElementName Dialog element name
         *
         * @return string Value of the dialog element
         */
        public final function getDialogValue($dialogElementName)
        {
        }
        public final function getStepStatus()
        {
        }
        public final function setStepStatus($status)
        {
        }
    }
 }}