<?php

namespace JobRouter\Log { if(false) {
    trait LogTrait
    {
        /**
         * Set the name of the log file. You can also specify the format for the filename.
         *
         * Default: processName_version_YYYYMMDD.log
         *
         * @param string $filename Name of the log file.
         * @param string $format Filename format.<br/>The following variables can be used in the format string: {filename}, {date}.
         * @param string $dateFormat Date format for date part of filename.<br/>Only considered when {date} is used in filename format.
         */
        final public function setLogFilename($filename, $format = '{filename}_{date}', $dateFormat = 'Ymd'): void
        {
        }
        /**
         * Set the full path of the log file.
         *
         * Default: JobRouter output/log directory
         *
         * @param string $filePath
         */
        final public function setLogFilePath($filePath): void
        {
        }
        /**
         * Set the log channel.
         *
         * Default: incidentNumber.stepNumber.functionClassName
         *
         * @param string $channel
         */
        final public function setLogChannel($channel): void
        {
        }
        /**
         * Set the minimum importance for log messages to be actually recorded.
         *
         * Default: CONST_LOG_LEVEL_FILE<br/>
         *
         * Possible values: DEBUG, INFO, NOTICE, WARNING, ERROR, CRITICAL, ALERT, EMERGENCY
         *
         * @param string $level
         */
        final public function setLogLevel($level): void
        {
        }
        /**
         * Set the output format for log messages.
         *
         * Default: %datetime% %channel%.%level_name%: %message% %context% %extra%<br/>
         *
         * The following variables can be used in the format string:
         * %datetime%, %channel%, %level_name%, %message%, %context%, %extra%
         *
         * @param string $format
         */
        final public function setLogMessageFormat($format): void
        {
        }
        /**
         * Disables the output formatting for log messages. Log messages are written as-is to log file.
         */
        final public function rawLog(): void
        {
        }
        /**
         * Writes a parsable string representation of the parameter to the log file.
         */
        final public function dump(mixed $var): void
        {
        }
        /**
         * System is unusable.
         */
        final public function emergency(string|\Stringable $message, array $context = []): void
        {
        }
        /**
         * Action must be taken immediately.
         *
         * Example: External database unavailable.
         */
        final public function alert(string|\Stringable $message, array $context = []): void
        {
        }
        /**
         * Critical conditions.
         *
         * Example: Unexpected exception.
         */
        final public function critical(string|\Stringable $message, array $context = []): void
        {
        }
        /**
         * Runtime errors that do not require immediate action but should typically be logged and monitored.
         */
        final public function error(string|\Stringable $message, array $context = []): void
        {
        }
        /**
         * \Exceptional occurrences that are not errors.
         *
         * Example: Undesirable things that are not necessarily wrong.
         */
        final public function warning(string|\Stringable $message, array $context = []): void
        {
        }
        /**
         * Normal but significant events.
         */
        final public function notice(string|\Stringable $message, array $context = []): void
        {
        }
        /**
         * Interesting events.
         *
         * Example: SQL logs.
         */
        final public function info(string|\Stringable $message, array $context = []): void
        {
        }
        /**
         * Detailed debug information.
         */
        final public function debug(string|\Stringable $message, array $context = []): void
        {
        }
        /**
         * Logs with an arbitrary level.
         *
         * Possible values for level: DEBUG, INFO, NOTICE, WARNING, ERROR, CRITICAL, ALERT, EMERGENCY
         */
        final public function log(mixed $level, string|\Stringable $message, array $context = []): void
        {
        }
    }
}}
namespace JobRouter\Engine\Runtime\PhpFunction { if(false) {
    abstract class AbstractFunction
    {
        use \JobRouter\Log\LogTrait;
        /**
         * Returns the name of the PHP function.
         *
         * @return string
         */
        final public function getName()
        {
        }
        /**
         * Returns the JobRouter DB connection.
         *
         * @throws \JobRouterException
         */
        final public function getJobDB(): \JobRouter\Common\Database\ConnectionInterface
        {
        }
        /**
         * Generates and returns a globally unique identifier (GUID).
         *
         * @return string Globally unique identifier (GUID)
         */
        final public function getGUID()
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
        final public function getUnformattedDate($dateFormat, $date, $includeTime = false)
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
        final public function getFormattedDate($id, $date = false, $isTimestamp = false, $fullDateTime = false, $timezone = '')
        {
        }
        /**
         * Removes the given directory including all subdirectories and files.
         *
         * @param string $path Path of directory to delete
         *
         * @return bool true on success, false on error
         */
        final public function removeDir($path)
        {
        }
        /**
         * Returns a UNIX timestamp for a given date.
         *
         * @param string $date Date in YYYY-MM-DD HH:II:SS format
         *
         * @return int Date as UNIX timestamp
         */
        final public function getTimestamp($date)
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
        final public function getFullDataPath($path = '', $processName = '', $processVersion = '')
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
        final public function getFullFunctionsPath($path = '', $processName = '', $processVersion = '')
        {
        }
        /**
         * Returns full path of output folder.
         *
         * @return string Full path of output folder
         */
        final public function getFullOutputPath()
        {
        }
        /**
         * Returns full path of temp folder.
         *
         * @return string Full path of temp folder
         */
        final public function getFullTempPath()
        {
        }
        /**
         * Returns full path of attached file.
         *
         * @param string $path Relative path (i.e. value from processtable)
         *
         * @return string Full path of attached file
         */
        final public function getFullUploadPath($path = '')
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
        final public function getStepUrl($workflowId, $userName = '')
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
        final public function getIncidentUrl($processId, $userName = '')
        {
        }
        /**
         * Returns the JobRouter default timezone.
         *
         * @return string Default timezone
         *
         * @throws \JobRouterException
         */
        final public function getDefaultTimezone()
        {
        }
        /**
         * Returns the timezone of the given user.
         *
         * @param string $userName Username
         *
         * @return string User timezone
         *
         * @throws \JobRouterException
         */
        final public function getUserTimezone($userName)
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
         * @throws \JobRouterException
         */
        final public function convertToDefaultTimezone($dateTimeValueInUserTimezone, $userTimezone)
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
         * @throws \JobRouterException
         */
        final public function convertToUserTimezone($dateTimeValueInDefaultTimezone, $userTimezone)
        {
        }
        /**
         * Creates a password hash.
         *
         * @param string $password
         *
         * @return string
         */
        final public function hashPassword($password)
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
        final public function verifyPassword($password, $hash)
        {
        }
        /**
         * Returns an object which can be used to create URLs for accessing
         * the given JobArchive result list from external applications.
         *
         * @param int $resultListId
         *
         * @return \JobArchive_ResultListUrlBuilder
         */
        final public function getJobArchiveResultListUrlBuilder($resultListId)
        {
        }
        /**
         * Returns the filename converted with the current platform encoding
         *
         * @param string $filename Filename to convert
         */
        public function getFilesystemFilename($filename): string
        {
        }
    }
    abstract class AbstractStepFunction extends \JobRouter\Engine\Runtime\PhpFunction\AbstractFunction
    {
        /**
         * Returns the current process name.
         *
         * @return string Process name
         */
        final public function getProcessName()
        {
        }
        /**
         * Returns the current process version.
         *
         * @return string Process version
         */
        final public function getVersion()
        {
        }
        /**
         * Returns the number of the current step.
         *
         * @return int Step number
         */
        final public function getStep()
        {
        }
        /**
         * Returns the jobfunction of the current step.
         *
         * @return string Jobfunction
         */
        final public function getJobFunction()
        {
        }
        /**
         * Returns the username of the current step.
         *
         * @return string Username
         */
        final public function getUsername()
        {
        }
        /**
         * Returns the current username.
         *
         * @return string current username
         */
        final public function getCurrentUsername()
        {
        }
        /**
         * Returns the initiator of the current incident.
         *
         * @return string Initiator username
         */
        final public function getInitiator()
        {
        }
        /**
         * Returns the number of the current incident.
         *
         * @return int Incident number
         */
        final public function getIncident()
        {
        }
        /**
         * Returns the label of the current step.
         *
         * @return string Step label
         *
         * @throws \JobRouterException
         */
        final public function getStepLabel()
        {
        }
        /**
         * Returns the Process Id of the current incident.
         *
         * @return string Process Id
         */
        final public function getProcessId()
        {
        }
        /**
         * Returns the Workflow Id of the current step.
         *
         * @return string Workflow Id
         */
        final public function getWorkflowId()
        {
        }
        /**
         * Returns the Process Step Id of the current step.
         *
         * @return string Process Step Id
         */
        final public function getStepId()
        {
        }
        /**
         * Returns the start date of the current incident.
         *
         * @return int Incident start date
         */
        final public function getStartDate()
        {
        }
        /**
         * Returns the escalation date of the current incident.
         *
         * @return int Incident escalation date
         */
        final public function getIncidentEscalationDate()
        {
        }
        /**
         * Returns the indate of the current step.
         *
         * @return int Step indate
         */
        final public function getInDate()
        {
        }
        /**
         * Returns the escalation date of the current step.
         *
         * @return int Step escalation date
         */
        final public function getStepEscalationDate()
        {
        }
        /**
         * Returns the value of an attribute of the current step or incident.
         *
         * @param string $attributeName Attribute name
         *
         * @return mixed Incident or step attribute value
         *
         * @throws \JobRouterException
         */
        final public function getIncidentValue($attributeName)
        {
        }
        /**
         * Checks if simulation mode is active for the current incident.
         *
         * @return bool true, if incident is in simulation mode, otherwise false
         */
        final public function isSimulation()
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
         * @throws \JobRouterException
         */
        final public function getMessage($messageName, $languageName = '', ?array $replacements = null)
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
        final public function getConfiguration($configurationName)
        {
        }
        /**
         * Returns a dialog element value.
         *
         * @param string $dialogElementName Dialog element name
         *
         * @return string Value of the dialog element
         *
         * @throws \JobRouterException
         */
        public function getDialogValue($dialogElementName)
        {
        }
        /**
         * Returns a process table field value.
         *
         * @param string $fieldName Field name
         * @param bool $rawValue Flag indicating that value should be returned "raw"
         *
         * @return mixed Value of the process table field
         *
         * @throws \JobRouterException
         */
        final public function getTableValue($fieldName, $rawValue = false)
        {
        }
        /**
         * Sets a process table field value.
         *
         * @param string $fieldName Field name
         * @param mixed $fieldValue New value
         *
         * @return void
         *
         * @throws \JobRouterException
         */
        final public function setTableValue($fieldName, $fieldValue)
        {
        }
        /**
         * Returns a previous process table field value (i.e. the value of a process table field from the previous step).
         *
         * @param string $fieldName Field name
         * @param bool $rawValue Flag indicating that value should be returned "raw"
         *
         * @return mixed Value of the process table field
         *
         * @throws \JobRouterException
         */
        final public function getOldTableValue($fieldName, $rawValue = false)
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
         *
         * @throws \JobRouterException
         */
        final public function getSubtableValue($subtable, $row, $fieldName, $rawValue = false)
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
         *
         * @throws \JobRouterException
         */
        final public function setSubtableValue($subtable, $row, $fieldName, $value)
        {
        }
        /**
         * Returns the number of rows for the given subtable.
         *
         * @param string $subtable Subtable Name
         *
         * @return int Number of rows
         *
         * @throws \JobRouterException
         */
        final public function getSubtableCount($subtable)
        {
        }
        /**
         * Return the row ids of the rows of a given subtable for the current step.
         *
         * @param string $subtable Subtable name
         *
         * @return array Subtable row ids
         *
         * @throws \JobRouterException
         */
        final public function getSubtableRowIds($subtable)
        {
        }
        /**
         * Deletes a subtable row.
         *
         * @param string $subtable Subtable name
         * @param int $row Row Id
         *
         * @return void
         *
         * @throws \JobRouterException
         */
        final public function deleteSubtableRow($subtable, $row)
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
         *
         * @throws \JobRouterException
         */
        final public function insertSubtableRow($subtable, $row, ?array $rowData = null)
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
         * @throws \JobRouterException
         */
        final public function clearSubtable($subtable, $deleteAttachedFiles = false)
        {
        }
        /**
         * Returns a database connection.
         *
         * @param string $connectionName Connection name
         *
         * @throws \JobRouterException
         */
        final public function getDBConnection($connectionName): \JobDB
        {
        }
        /**
         * Returns the user language for current step.
         *
         * @return string User language (default process language, if no user step)
         *
         * @throws \JobRouterException
         */
        final public function getLanguage()
        {
        }
        /**
         * Attaches a file to the process table or a subtable.
         *
         * @param string $filepath
         * @param string $fieldname
         * @param int $row
         * @param string $subtable
         *
         * @throws \JobRouterException
         */
        final public function attachFile($filepath, $fieldname, $row = 0, $subtable = '')
        {
        }
        /**
         * Deletes a file from the process table or a subtable.
         *
         * @param string $fieldname
         * @param int $row
         * @param string $subtable
         *
         * @throws \JobRouterException
         */
        final public function deleteFile($fieldname, $row = 0, $subtable = '')
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
         * @throws \JobRouterException
         */
        final public function getOriginalFilename($fieldname, $row = 0, $subtable = '', $includeFolder = false)
        {
        }
        /**
         * Checks if the current step is a request.
         *
         * @return bool true, if step is a request, otherwise false
         */
        final public function isRequest()
        {
        }
        /**
         * Checks if the current step is an answer for a request.
         *
         * @return bool true, if step is an answer, otherwise false
         */
        final public function isAnswer()
        {
        }
        /**
         * Returns the backlink of the current step.
         *
         * @return string backlink
         */
        final public function getBacklink()
        {
        }
        /**
         * Returns the notice of the current step.
         *
         * @return string Notice
         */
        final public function getNotice()
        {
        }
        /**
         * Returns the 2nd notice of the current step.
         *
         * @return string 2nd notice
         */
        final public function getNotice2()
        {
        }
        /**
         * Returns the priority of the current step.
         *
         * @return int Priority
         */
        final public function getPriority()
        {
        }
        /**
         * Sets the priority of the current step.
         *
         * @param int $priority Priority
         *
         * @return void
         */
        final public function setPriority($priority)
        {
        }
        /**
         * Returns the current subtable name during rule execution.
         *
         * @return string Current subtable name
         */
        final public function getCurrentSubtable()
        {
        }
        /**
         * Returns the current subtable row id during rule execution.
         *
         * @return int Current subtable row id
         */
        final public function getCurrentSubtableRowId()
        {
        }
        /**
         * Returns the input parameter value with the given name.
         *
         * @param string $parameterName Name of the input parameter
         *
         * @return mixed Input parameter value
         *
         * @throws \JobRouterException
         */
        final public function getInputParameter($parameterName)
        {
        }
        abstract public function execute($rowId = null);

    }
    abstract class BoxActionFunction extends \JobRouter\Engine\Runtime\PhpFunction\AbstractFunction
    {
        /**
         * Returns the id of the process box.
         *
         * @return int Process box id
         */
        final public function getBoxId()
        {
        }
        /**
         * Returns the selected box action.
         *
         * @return int Selected box action
         */
        final public function getBoxAction()
        {
        }
        /**
         * Returns the label of the selected box action.
         *
         * @return string Label of the selected box action
         */
        final public function getBoxActionLabel()
        {
        }
        /**
         * Returns the workflowids of the selected steps.
         *
         * @return array Workflowids of the selected steps
         */
        final public function getWorkflowIds()
        {
        }
        /**
         * Returns the username of the user who triggered the box action.
         *
         * @return string Username of the user who triggered the box action
         */
        final public function getUserName()
        {
        }
        /**
         * Returns the unique id for the execution of the box action.
         *
         * @return string Unique id for the execution of the box action
         */
        final public function getCurrentGUID()
        {
        }
        /**
         * Removes the given workflow id from the list of workflow ids of the steps to be sent after execution of the box action.
         *
         * @param string $workflowId
         */
        final public function removeWorkflowId($workflowId)
        {
        }
        /**
         * Returns a step instance for the given workflow id.
         *
         * @param string $workflowId
         *
         * @return \JobRouter\Engine\Runtime\Step\Step
         *
         * @throws \JobRouterException
         */
        final public function getStepByWorkflowId($workflowId)
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
        final public function getConfiguration($configurationName)
        {
        }
        /**
         * Returns the process step ids for the selected steps.
         *
         * @return array Process step ids of the selected steps
         *
         * @throws \JobRouterException
         */
        final public function getStepIds()
        {
        }
        /**
         * Adds a message to be shown to the user after execution of the box action.
         *
         * @param array|string $messageText Message text
         * @param int $messageType Message type (0 = Success, 1 = Info, 2 = Warning, 3 = Error)
         *
         * @throws \JobRouterException
         */
        final public function addMessage(array|string $messageText, int $messageType = 1): void
        {
        }
        /**
         * Returns the current username.
         *
         * @return string current username
         */
        final public function getCurrentUsername()
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
         * @throws \JobRouterException
         */
        final public function getMessage(string $messageName, ?string $languageName = '', ?array $replacements = null): string
        {
        }
        /**
         * Returns the current language. This is the user language or the default process language, if the user language is not available in the process.
         *
         * @return string Language name
         *
         * @throws \JobRouterException
         */
        final public function getLanguage(): string
        {
        }
        abstract public function execute();
    }
    abstract class DialogFunction extends \JobRouter\Engine\Runtime\PhpFunction\AbstractStepFunction
    {
        /**
         * Saves the current step
         *
         * @throws \JobRouterException
         */
        final public function save()
        {
        }
        /**
         * Returns the value for a userdefined parameter, which was defined in the jr_execute_dialog_function call
         *
         * @param $parameterName
         *
         * @return mixed|null
         */
        final public function getParameter($parameterName)
        {
        }
        /**
         * Sets a custom return value, which can be accessed in the callbacks of jr_execute_dialog_function
         *
         * @param $key
         * @param $returnValue
         */
        final public function setReturnValue($key, $returnValue)
        {
        }
        /**
         * Returns the value of a dialog element
         *
         * @param string $dialogElementName
         *
         * @return mixed|string
         *
         * @throws \JobRouterException
         */
        final public function getDialogValue($dialogElementName)
        {
        }
    }
    abstract class RuleConditionFunction extends \JobRouter\Engine\Runtime\PhpFunction\AbstractStepFunction
    {
        /**
         * Returns a dialog element value.
         *
         * @param string $dialogElementName Dialog element name
         *
         * @return string Value of the dialog element
         */
        final public function getDialogValue($dialogElementName)
        {
        }
    }
    abstract class RuleExecutionFunction extends \JobRouter\Engine\Runtime\PhpFunction\AbstractStepFunction
    {
        /**
         * Returns a dialog element value.
         *
         * @param string $dialogElementName Dialog element name
         *
         * @return string Value of the dialog element
         */
        final public function getDialogValue($dialogElementName)
        {
        }
    }
    abstract class StepInitializationFunction extends \JobRouter\Engine\Runtime\PhpFunction\AbstractStepFunction
    {
        /**
         * Returns a dialog element value.
         *
         * @param string $dialogElementName Dialog element name
         *
         * @return string Value of the dialog element
         */
        final public function getDialogValue($dialogElementName)
        {
        }
        /**
         * Saves the current step
         */
        final public function save()
        {
        }
    }
    abstract class SystemActivityFunction extends \JobRouter\Engine\Runtime\PhpFunction\AbstractStepFunction
    {
        /**
         * Returns a dialog element value.
         *
         * @param string $dialogElementName Dialog element name
         *
         * @return string Value of the dialog element
         */
        final public function getDialogValue($dialogElementName)
        {
        }
        final public function getStepStatus()
        {
        }
        final public function setStepStatus($status)
        {
        }
    }
}}
namespace JobRouter\Common\Database { if(false) {
    class ConnectionInterface
    {
        const TYPE_CLOB = 'clob';
        const TYPE_DECIMAL = 'decimal';
        const TYPE_DATETIME = 'timestamp';
        const TYPE_INTEGER = 'integer';
        const TYPE_TEXT = 'text';
        /**
         * Executes an SQL statement, returning a result set as a Statement object.
         *
         * @param string $sql sql query
         *
         * @return Result|false
         * @throws \JobRouterException
         */
        public function query($sql)
        {
        }
        /**
         * Executes an SQL statement and return the number of affected rows.
         *
         * @param string $sql sql query
         *
         * @return mixed
         */
        public function exec($sql)
        {
        }
        /**
         * Return the whole dataset from the result as an array.
         * If there are no more datasets, a null will be returned, false will be returned on error.
         *
         * @param Result $result
         *
         * @return mixed Dataset as array, null or false on error
         */
        public function fetchArray($result)
        {
        }
        /**
         * Return a dataset from the result as an associative array.
         * If there are no more datasets, a null will be returned, false will be returned on error.
         *
         * @param Result $result
         *
         * @return array|false|null
         */
        public function fetchRow($result)
        {
        }
        /**
         * Returns next dataset from result as object
         *
         * If there are no more datasets, a null will be returned, false will be returned on error.
         *
         * @param Result $result
         * @param string $className
         *
         * @return mixed Dataset as object, null or false on error
         */
        public function fetchObject($result, $className = 'stdClass')
        {
        }
        /**
         * Returns next column from the result, false on error
         *
         * @param Result $result
         *
         * @return mixed Dataset as array, null or false on error
         */
        public function fetchCol($result)
        {
        }
        /**
         * Method returns all rows of the query result.
         * If an error occurs, the method returns false.
         *
         * @param Result $result result object returned by query()
         *
         * @return mixed array or false in case of error
         */
        public function fetchAll($result)
        {
        }
        /**
         * Returns the first column of the first data set.
         * If an error occurs, the method returns false.
         *
         * @param Result $result result object returned by query
         *
         * @return string|false
         */
        public function fetchOne($result)
        {
        }
        /**
         * Converts the passed value to a DBMS-specific format suitable for query statements.
         * Overwrite the quote method from DatabaseAwareInterface so there is no risk for a type error in existing code
         *
         * @param $value string
         * @param $type string
         *
         * @return string converted value
         * @throws \JobRouterException
         */
        public function quote($value, $type = null)
        {
        }
        /**
         * Returns last error occurred
         *
         * @return string Fehlermeldung des zuletzt aufgetretenen Fehlers
         */
        public function getErrorMessage()
        {
        }
        /**
         * Returns number of rows of the last query
         *
         * @param Result $result
         *
         * @return int Number of rows
         */
        public function getNumRows($result)
        {
        }
        public function setLimit($limit, $offset = null)
        {
        }
        /**
         * Executes an, optionally parametrized, SQL query.
         *
         * @param string $sql
         * @param array $params
         * @param array|null $types
         *
         * @return false|int|Result
         * @throws \JobRouterException
         */
        public function preparedSelect(string $sql, array $params, ?array $types = [])
        {
        }
        /**
         * @param string $sql
         * @param array $params
         * @param array|null $types
         *
         * @return mixed
         * @throws \JobRouterException
         */
        public function preparedExecute(string $sql, array $params, ?array $types = [])
        {
        }
        /**
         * Returns the ID of the last inserted row, or the last value from a sequence object,
         * depending on the underlying driver.
         *
         * Note: This method may not return a meaningful or consistent result across different drivers,
         * because the underlying database may not even support the notion of AUTO_INCREMENT/IDENTITY
         * columns or sequences.
         *
         * @param string|null $table Name of the sequence object from which the ID should be returned.
         * @param string|null $field Name of the field linked to the table. (only important for JobDB)
         *
         * @return string A string representation of the last inserted ID.
         */
        public function lastInsertId($table = null, $field = null)
        {
        }
        /**
         * Indicates if a table already exists or not.
         *
         * @param string $tableName
         *
         * @return boolean true if table exists or false if not
         */
        public function tableExists($tableName)
        {
        }
    }
    class Result
    {
    }
}}
namespace JobRouter\Engine\Runtime\Step { if(false) {
    class Step
    {
        /**
         * Returns number of current step
         *
         * @return    int    number of step
         */
        final public function getStep()
        {
        }
        /**
         * Returns processid
         *
         * @return    string    processid
         */
        final public function getProcessId()
        {
        }
        /**
         * Returns workflowid
         *
         * @return    string    workflowid
         */
        final public function getWorkflowId()
        {
        }
        /**
         * Returns    backlink (workflowid of preceding step)
         *
         * @return    string    backlink
         */
        final public function getBacklink()
        {
        }
        /**
         * Returns    pool
         *
         * @return    int    pool
         */
        final public function getPool()
        {
        }
        /**
         * Returns    jobfunction
         *
         * @return    string    jobfunction
         */
        final public function getJobfunction()
        {
        }
        /**
         * Returns    username
         *
         * @return    string    username
         */
        final public function getUsername()
        {
        }
        /**
         * Returns dialog name
         *
         * @return    string dialog name
         */
        final public function getDialogName()
        {
        }
        /**
         * Returns indate
         *
         * @return    int    indate timestamp
         */
        final public function getIndate()
        {
        }
        /**
         * Returns outdate
         *
         * @return    int    outdate timestamp
         */
        final public function getOutdate()
        {
        }
        /**
         * Returns escalation date
         *
         * @return    string escalation date
         */
        final public function getEscalationDate()
        {
        }
        /**
         * Returns escalation timestamp
         *
         * @return    int escalation timestamp
         */
        final public function getEscalationTimeStamp()
        {
        }
        /**
         * Checks if this is a request
         *
         * @return bool
         */
        final public function isRequest()
        {
        }
        /**
         * Checks if step is assigned
         *
         * @return bool
         */
        final public function isAssigned()
        {
        }
        /**
         * Checks if this is an answer
         *
         * @return bool
         */
        final public function isAnswer()
        {
        }
        /**
         * Checks if this is aborted
         *
         * @return bool
         */
        final public function isAborted()
        {
        }
        /**
         * Returns a processtable field value.
         *
         * @param string $fieldName Field name
         * @param bool $rawValue Flag indicating that value should be returned "raw"
         *
         * @return mixed Value of the processtable field
         *
         * @throws \JobRouterException
         */
        final public function getTableValue($fieldName, $rawValue = false)
        {
        }
        /**
         * Sets a processtable field value.
         *
         * @param string $fieldName Field name
         * @param mixed $fieldValue New value
         *
         * @return void
         *
         * @throws \Exception
         * @throws \JobRouterException
         */
        final public function setTableValue($fieldName, $fieldValue)
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
         *
         * @throws \JobRouterException
         */
        final public function getSubtableValue($subtable, $row, $fieldName, $rawValue = false)
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
         *
         * @throws \Exception
         * @throws \JobRouterException
         */
        final public function setSubtableValue($subtable, $row, $fieldName, $value)
        {
        }
        /**
         * Return the row ids of the rows of a given subtable for the current step.
         *
         * @param string $subtable Subtable name
         *
         * @return array Subtable row ids
         */
        final public function getSubtableRowIds($subtable)
        {
        }
        final public function getStatus()
        {
        }
        final public function getStepStatus()
        {
        }
        final public function isReserved()
        {
        }
        /**
         * Saves the current step.
         *
         * @throws \JobRouterException
         */
        final public function save()
        {
        }
        /**
         * Gets resubmission date of current step.
         *
         * @return    string date of resubmission (timestamp)
         */
        final public function getResubmissionDate()
        {
        }
        final public function getPriority()
        {
        }
        final public function isSimulation()
        {
        }
        /**
         * Returns process name for current step.
         *
         * @return    string     process name
         *
         */
        final public function getProcessName()
        {
        }
        /**
         * Returns process version for current step.
         *
         * @return    int    process version
         */
        final public function getVersion()
        {
        }
        /**
         * Returns incident number for current step.
         *
         * @return    int    incident number
         */
        final public function getIncidentNumber()
        {
        }
        /**
         * Returns the number of rows for the given subtable.
         *
         * @param string $subtable Subtable name
         *
         * @return int Number of rows
         */
        final public function getSubtableCount($subtable)
        {
        }
        /**
         * Returns the notice for the current step.
         *
         * return    string    notice
         */
        final public function getNotice()
        {
        }
        /**
         * Returns the notice for the current step.
         *
         * return    string    notice
         */
        final public function getNotice2()
        {
        }
        /**
         * Returns step error.
         *
         * return    int    error code
         */
        final public function getError()
        {
        }
        /**
         * Return step error message.
         *
         * return    string    error message
         */
        final public function getErrorMessage()
        {
        }
        /**
         * Returns the step id (process_step_id) of the current step.
         *
         * @return    string    step id (GUID)
         */
        final public function getStepId()
        {
        }
        /**
         * Returns the step summary of the current step.
         *
         * @return    string    step summary
         */
        final public function getSummary()
        {
        }
    }
}}
namespace { if(false) {
    class JobRouterException extends \Exception
    {
    }
    class JobArchive_ResultListUrlBuilder
    {
        /**
         * Sets the name of the user the URL should be built for.
         *
         * @param string $username
         */
        public function setUsername($username)
        {
        }
        /**
         * Sets the start date of the validity period for the URL.
         *
         * @param DateTime|string $validFrom
         */
        public function setValidFrom($validFrom): void
        {
        }
        /**
         * Sets the end date of the validity period for the URL.
         *
         * @param DateTime|string $validUntil
         */
        public function setValidUntil($validUntil): void
        {
        }
        public function addCompareFilter($fieldName, $fieldValue, $operator)
        {
        }
        public function addExactFilter($fieldName, $fieldValue)
        {
        }
        public function addLikeFilter($fieldName, $fieldValue)
        {
        }
        public function addRangeFilter($fieldName, $fromValue, $fromOperator, $toValue, $toOperator)
        {
        }
        /**
         * Enables or disables download for result list.
         *
         * @param bool $downloadAllowed
         */
        public function setDownloadAllowed($downloadAllowed)
        {
        }
        /**
         * Use annotations for result list.
         *
         * @param bool $annotationsAllowed
         */
        public function setAnnotationsAllowed($annotationsAllowed)
        {
        }
        /**
         * Use exact revision for determining document
         */
        public function setUseExactRevision(bool $useExactRevision)
        {
        }
        /**
         * Sets the viewer.
         *
         * Possible values for viewer:
         *
         * browser = Display in web browser
         * default = Use global default viewer
         * download = Download file
         *
         * @param string $viewer
         *
         * @throws InvalidArgumentException if invalid viewer is specified
         */
        public function setViewer($viewer)
        {
        }
        /**
         * Sets the view mode.
         *
         * Possible values for view mode:
         *
         * auto = Show viewer if only one document found, otherwise show result list
         * resultlist = Always show result list, no matter how many documents found
         * viewer = Always show viewer
         *
         * @param string $viewMode
         *
         * @throws InvalidArgumentException if invalid view mode is specified
         */
        public function setViewMode($viewMode)
        {
        }
        /**
         * Returns the URL for accessing the result list.
         *
         * @return string
         *
         * @throws \JobRouterException
         */
        public function getUrl()
        {
        }
        /**
         * Returns the unencrypted query for accessing the result list.
         *
         * @return string
         */
        public function getQuery()
        {
        }
    }
}}
