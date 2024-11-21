<?php
return [
  'ActionHistoryRecord' => [
    'fields' => [
      'user' => '用户',
      'action' => '动作',
      'createdAt' => '日期',
      'userType' => 'User Type',
      'target' => '目标',
      'targetType' => '目标类型',
      'authToken' => '授权令牌',
      'ipAddress' => 'IP地址',
      'authLogRecord' => '身份验证日志记录'
    ],
    'links' => [
      'authToken' => '授权令牌',
      'authLogRecord' => '身份验证日志记录',
      'user' => '用户',
      'target' => '目标'
    ],
    'presetFilters' => [
      'onlyMy' => '只有我的'
    ],
    'options' => [
      'action' => [
        'read' => '读取',
        'update' => '升级',
        'delete' => '删除',
        'create' => '创建'
      ]
    ]
  ],
  'AddressCountry' => [
    'labels' => [
      'Create AddressCountry' => 'Create Address Country',
      'Populate' => 'Populate'
    ],
    'fields' => [
      'code' => 'Code',
      'isPreferred' => 'Is Preferred'
    ],
    'tooltips' => [
      'code' => 'ISO 3166-1 alpha-2 code.',
      'isPreferred' => 'Preferred counties appear first in the picklist.'
    ],
    'messages' => [
      'confirmPopulateDefaults' => 'All existing countries will be deleted, the default country list will be created. It won\'t be possible to revert the operation.

Are you sure?'
    ],
    'strings' => [
      'populateDefaults' => 'Populate with default country list'
    ]
  ],
  'Admin' => [
    'labels' => [
      'Enabled' => '已启用',
      'Disabled' => '已禁用',
      'System' => '系统',
      'Users' => '用户',
      'Email' => '电子邮件',
      'Messaging' => 'Messaging',
      'Data' => '数据',
      'Misc' => 'Misc',
      'Setup' => 'Setup',
      'Customization' => '自定义',
      'Available Fields' => '可用的字段',
      'Layout' => '布局',
      'Entity Manager' => '功能管理器',
      'Add Panel' => '添加面板',
      'Add Field' => '添加字段',
      'Settings' => '设置',
      'Scheduled Jobs' => '计划任务',
      'Upgrade' => '升级',
      'Clear Cache' => '清除缓存',
      'Rebuild' => '重建',
      'Teams' => '团队',
      'Roles' => '角色',
      'Portal' => '门户',
      'Portals' => '门户',
      'Portal Roles' => '门户角色',
      'Portal Users' => '门户用户',
      'API Users' => 'API Users',
      'Outbound Emails' => '外发邮件',
      'Group Email Accounts' => '邮件组帐户',
      'Personal Email Accounts' => '私人邮件帐户',
      'Inbound Emails' => '入站邮件',
      'Email Templates' => '邮件模板',
      'Import' => '导入',
      'Layout Manager' => '布局管理器',
      'User Interface' => '用户界面',
      'Auth Tokens' => '认证令牌',
      'Auth Log' => '身份验证日志',
      'App Log' => 'App Log',
      'Authentication' => '身份验证',
      'Currency' => '货币',
      'Integrations' => '集成',
      'Extensions' => '扩展',
      'Webhooks' => 'Webhooks',
      'Dashboard Templates' => 'Dashboard Templates',
      'Upload' => '上传',
      'Installing...' => '正在安装...',
      'Upgrading...' => '正在升级...',
      'Upgraded successfully' => '升级成功',
      'Installed successfully' => '安装成功',
      'Ready for upgrade' => '准备升级',
      'Run Upgrade' => '开始升级',
      'Install' => '安装',
      'Ready for installation' => '准备安装',
      'Uninstalling...' => '正在卸载…',
      'Uninstalled' => '已卸载',
      'Create Entity' => '创建实体',
      'Edit Entity' => '编辑实体',
      'Create Link' => '创建链接',
      'Edit Link' => '编辑链接',
      'Notifications' => '提醒',
      'Jobs' => '任务',
      'Job Settings' => 'Job Settings',
      'Reset to Default' => '重置为默认',
      'Email Filters' => '邮件过滤器',
      'Action History' => '动作历史',
      'Label Manager' => '标签管理',
      'Template Manager' => 'Template Manager',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => '附件',
      'System Requirements' => 'System Requirements',
      'PDF Templates' => 'PDF Templates',
      'PHP Settings' => 'PHP Settings',
      'Database Settings' => 'Database Settings',
      'Permissions' => 'Permissions',
      'Email Addresses' => 'Email Addresses',
      'Phone Numbers' => 'Phone Numbers',
      'Layout Sets' => 'Layout Sets',
      'Working Time Calendars' => 'Working Time Calendars',
      'Group Email Folders' => 'Group Email Folders',
      'Authentication Providers' => 'Authentication Providers',
      'Address Countries' => 'Address Countries',
      'Success' => 'Success',
      'Fail' => 'Fail',
      'Configuration Instructions' => 'Configuration Instructions',
      'Formula Sandbox' => 'Formula Sandbox',
      'is recommended' => 'is recommended',
      'extension is missing' => 'extension is missing'
    ],
    'layouts' => [
      'list' => '列表',
      'detail' => '详情',
      'listSmall' => '列表（小）',
      'detailSmall' => '详情（小）',
      'detailPortal' => '详情(门户)',
      'detailSmallPortal' => '详情(小,门户)',
      'listSmallPortal' => '列表(小,门户)',
      'listPortal' => '列表(门户)',
      'relationshipsPortal' => '关系面板(门户)',
      'filters' => '搜索过滤器',
      'massUpdate' => '批量更新',
      'relationships' => '关系面板',
      'defaultSidePanel' => 'Side Panel Fields',
      'bottomPanelsDetail' => 'Bottom Panels',
      'bottomPanelsEdit' => 'Bottom Panels (Edit)',
      'bottomPanelsDetailSmall' => 'Bottom Panels (Detail Small)',
      'bottomPanelsEditSmall' => 'Bottom Panels (Edit Small)',
      'sidePanelsDetail' => '侧板（详情）',
      'sidePanelsEdit' => '侧板（编辑）',
      'sidePanelsDetailSmall' => '侧面板（小详情）',
      'sidePanelsEditSmall' => '侧面板（小编辑）',
      'kanban' => '看板',
      'detailConvert' => '转换潜在客户',
      'listForAccount' => '列表（帐户）',
      'listForContact' => '列表（联系人）'
    ],
    'fieldTypes' => [
      'address' => '动作',
      'array' => 'Array',
      'foreign' => 'Foreign',
      'duration' => 'Duration',
      'password' => 'Password',
      'personName' => 'Person Name',
      'autoincrement' => 'Auto-increment',
      'bool' => 'Boolean',
      'currency' => 'Currency',
      'currencyConverted' => '货币（已转换）',
      'date' => 'Date',
      'datetime' => 'DateTime',
      'datetimeOptional' => 'Date/DateTime',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiple',
      'linkParent' => 'Link Parent',
      'linkOne' => 'Link One',
      'phone' => 'Phone',
      'text' => 'Text',
      'url' => 'URL',
      'urlMultiple' => 'Url Multiple',
      'varchar' => '字符串',
      'file' => 'File',
      'image' => 'Image',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Attachment Multiple',
      'rangeInt' => 'Range Integer',
      'rangeFloat' => 'Range Float',
      'rangeCurrency' => 'Range Currency',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Map',
      'number' => '数字',
      'colorpicker' => '拾色器',
      'checklist' => 'Checklist',
      'barcode' => 'Barcode',
      'jsonArray' => 'JSON 数组',
      'jsonObject' => 'Json 对象'
    ],
    'fields' => [
      'type' => '类型',
      'name' => '名称',
      'label' => '标签',
      'tooltipText' => '工具提示文本',
      'required' => '必填',
      'default' => '默认',
      'maxLength' => '最大长度',
      'options' => '选项',
      'optionsReference' => 'Options Reference',
      'after' => '在之后（字段）',
      'before' => '在之前（字段）',
      'link' => '连接',
      'field' => '字段',
      'min' => '最小',
      'max' => '最大',
      'translation' => '翻译',
      'previewSize' => '预览大小',
      'listPreviewSize' => 'Preview Size in List View',
      'noEmptyString' => '不允许清空字符串',
      'defaultType' => '默认类型',
      'seeMoreDisabled' => '禁用文本剪切',
      'cutHeight' => 'Cut Height (px)',
      'entityList' => '功能列表',
      'isSorted' => '排序（按字母顺序）',
      'audited' => '审计',
      'trim' => '修剪',
      'height' => '高度 (px)',
      'minHeight' => '最小高度 (px)',
      'provider' => '提供者',
      'typeList' => '类型列表',
      'rows' => '文本框高度',
      'lengthOfCut' => '切割长度',
      'sourceList' => '源列表',
      'prefix' => '称谓',
      'nextNumber' => '下一个数',
      'padLength' => '填充长度',
      'disableFormatting' => '禁用格式',
      'dynamicLogicVisible' => '条件使字段可见',
      'dynamicLogicReadOnly' => '条件使字段只读',
      'dynamicLogicRequired' => '条件使字段可得',
      'dynamicLogicOptions' => '条件选项',
      'dynamicLogicInvalid' => 'Conditions making field invalid',
      'probabilityMap' => '阶段概率 (%)',
      'notActualOptions' => 'Not Actual Options',
      'activeOptions' => 'Active Options',
      'readOnly' => '只读',
      'readOnlyAfterCreate' => 'Read-only After Create',
      'maxFileSize' => '文件最大大小',
      'isPersonalData' => '个人数据',
      'useIframe' => 'Use Iframe',
      'useNumericFormat' => '使用数字格式',
      'strip' => 'Strip',
      'minuteStep' => 'Minutes Step',
      'inlineEditDisabled' => 'Disable Inline Edit',
      'allowCustomOptions' => 'Allow Custom Options',
      'displayAsLabel' => 'Display as Label',
      'displayAsList' => 'Display as List',
      'labelType' => 'Label Type',
      'maxCount' => 'Max Item Count',
      'accept' => 'Accept',
      'viewMap' => 'View Map Button',
      'codeType' => 'Code Type',
      'lastChar' => 'Last Character',
      'onlyDefaultCurrency' => 'Only default currency',
      'decimal' => 'Decimal',
      'displayRawText' => 'Display raw text (no markdown)',
      'conversionDisabled' => 'Disable Conversion',
      'decimalPlaces' => 'Decimal Places',
      'pattern' => 'Pattern',
      'globalRestrictions' => 'Global Restrictions',
      'copyToClipboard' => 'Copy to clipboard button',
      'createButton' => 'Create Button',
      'autocompleteOnEmpty' => 'Autocomplete on empty input',
      'relateOnImport' => 'Relate on Import',
      'aclScope' => 'ACL Scope',
      'onlyAdmin' => 'Only for Admin'
    ],
    'strings' => [
      'rebuildRequired' => 'Rebuild is required'
    ],
    'messages' => [
      'cacheIsDisabled' => 'Cache is disabled, the application will run slow. Enable cache in the [settings](#Admin/settings).',
      'formulaFunctions' => 'More functions can be found in [documentation]({documentationUrl}).',
      'rebuildRequired' => 'You need to run rebuild from CLI.',
      'upgradeVersion' => 'EspoCRM will be upgraded to version **{version}**. Please be patient as this may take a while.',
      'upgradeDone' => 'EspoCRM has been upgraded to version **{version}**.',
      'upgradeBackup' => '建议在升级EspoCRM之前备份文件和数据。',
      'thousandSeparatorEqualsDecimalMark' => '千分分隔符不能与小数点字符相同。',
      'userHasNoEmailAddress' => '用户未设置Email地址。',
      'selectEntityType' => '在左侧菜单选择功能类型。',
      'selectUpgradePackage' => '选择升级包',
      'downloadUpgradePackage' => 'Download upgrade package(s) [here]({url}).',
      'selectLayout' => '在左侧菜单选择并编辑所需的布局。',
      'selectExtensionPackage' => '选择扩展包',
      'extensionInstalled' => '扩展{name}{version}已安装。',
      'installExtension' => '扩展{name}{version}已准备好进行安装。',
      'cronIsDisabled' => 'Cron is disabled, the application is not fully functional. Enable cron in the [settings](#Admin/settings).',
      'cronIsNotConfigured' => '计划作业没有运行。因此入站邮件、通知和提醒都不起作用。 请按照[instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab)设置 cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available. Please follow the [instructions](https://www.espocrm.com/documentation/administration/upgrading/) to upgrade your instance.',
      'newExtensionVersionIsAvailable' => '{extensionName}有新版本{latestVersion}可以使用。',
      'uninstallConfirmation' => '是否卸载扩展？',
      'upgradeInfo' => 'Check the [documentation]({url}) about how to upgrade your EspoCRM instance.',
      'upgradeRecommendation' => 'This way of upgrading is not recommended. It\'s better to upgrade from CLI.'
    ],
    'descriptions' => [
      'settings' => '应用程序的系统设置。',
      'scheduledJob' => '由Cron执行的作业。',
      'jobs' => 'Jobs execute tasks in the background.',
      'upgrade' => '升级EspoCRM。',
      'clearCache' => '清除所有后端缓存。',
      'rebuild' => '重建后端并清除缓存。',
      'users' => '用户管理。',
      'teams' => '团队管理。',
      'roles' => '角色管理。',
      'portals' => '门户管理。',
      'portalRoles' => '门户的角色。',
      'portalUsers' => '门户用户。',
      'outboundEmails' => '外发邮件的SMTP服务器设置。',
      'groupEmailAccounts' => '组邮件帐户IMAP。邮件导入和邮件到工单。',
      'personalEmailAccounts' => '用户邮件帐户。',
      'emailTemplates' => '外发邮件模板。',
      'import' => '从CSV文件导入数据。',
      'layoutManager' => '自定义布局（列表，详情，编辑，搜索，批量更新）。',
      'entityManager' => '创建并编辑自定义记录。管理字段和关系。',
      'userInterface' => '配置UI。',
      'authTokens' => '活动身份验证会话, IP 地址和最后访问日期。',
      'authentication' => '身份验证设置。',
      'currency' => '货币设置和汇率。',
      'extensions' => '安装或卸载扩展。',
      'integrations' => '集成第三方服务。',
      'notifications' => '系统内部通知和邮件通知设置。',
      'inboundEmails' => '入站邮件设置。',
      'emailFilters' => 'Email内容与过滤器规则相匹配将无法被导入。',
      'groupEmailFolders' => 'Email folders shared for teams.',
      'actionHistory' => '记录用户行为。',
      'labelManager' => '自定义应用标签。',
      'templateManager' => 'Customize message templates.',
      'authLog' => '历史登录记录信息',
      'appLog' => 'Application log.',
      'leadCapture' => 'Web-to-Lead的API入口点。',
      'attachments' => '存储在系统中的所有文件附件。',
      'systemRequirements' => 'System Requirements for EspoCRM.',
      'apiUsers' => 'Separate users for integration purposes.',
      'webhooks' => 'Manage webhooks.',
      'authenticationProviders' => 'Additional authentication providers for portals.',
      'emailAddresses' => 'All email addresses stored in the system.',
      'phoneNumbers' => 'All phone numbers stored in the system.',
      'dashboardTemplates' => 'Deploy dashboards to users.',
      'layoutSets' => 'Collections of layouts that can be assigned to teams & portals.',
      'workingTimeCalendars' => 'Working schedule.',
      'jobsSettings' => 'Job processing settings. Jobs execute tasks in the background.',
      'sms' => 'SMS settings.',
      'pdfTemplates' => 'Templates for printing to PDF.',
      'formulaSandbox' => 'Write and test formula scripts.',
      'addressCountries' => 'Countries available for address fields.'
    ],
    'keywords' => [
      'settings' => 'system',
      'userInterface' => 'ui,theme,tabs,logo,dashboard',
      'authentication' => 'password,security,ldap',
      'scheduledJob' => 'cron,jobs',
      'integrations' => 'google,maps,google maps',
      'authLog' => 'log,history',
      'authTokens' => 'history,access,log',
      'entityManager' => 'fields,relations,relationships',
      'templateManager' => 'notifications',
      'jobs' => 'cron',
      'labelManager' => 'language,translation'
    ],
    'options' => [
      'previewSize' => [
        '' => 'Default',
        'x-small' => '最小',
        'small' => '小',
        'medium' => '中',
        'large' => '大'
      ],
      'labelType' => [
        'state' => 'State',
        'regular' => 'Regular'
      ]
    ],
    'logicalOperators' => [
      'and' => '和',
      'or' => '或者',
      'not' => '不'
    ],
    'systemRequirements' => [
      'requiredPhpVersion' => 'PHP Version',
      'requiredMysqlVersion' => 'MySQL Version',
      'requiredMariadbVersion' => 'MariaDB version',
      'requiredPostgresqlVersion' => 'PostgreSQL version',
      'host' => 'Host Name',
      'dbname' => 'Database Name',
      'user' => 'User Name',
      'writable' => 'Writable',
      'readable' => 'Readable'
    ],
    'templates' => [
      'twoFactorCode' => '2FA Code',
      'accessInfo' => 'Access Info',
      'accessInfoPortal' => 'Access Info for Portals',
      'assignment' => 'Assignment',
      'mention' => 'Mention',
      'noteEmailReceived' => 'Note about Received Email',
      'notePost' => 'Note about Post',
      'notePostNoParent' => 'Note about Post (no Parent)',
      'noteStatus' => 'Note about Status Update',
      'passwordChangeLink' => 'Password Change Link',
      'invitation' => 'Invitation',
      'cancellation' => 'Cancellation',
      'reminder' => 'Reminder'
    ]
  ],
  'ApiUser' => [
    'labels' => [
      'Create ApiUser' => 'Create API User'
    ]
  ],
  'AppLogRecord' => [
    'fields' => [
      'message' => 'Message',
      'code' => 'Code',
      'level' => 'Level',
      'exceptionClass' => 'Exception Class',
      'file' => 'File',
      'line' => 'Line',
      'requestMethod' => 'Request Method',
      'requestResourcePath' => 'Request Resource Path'
    ],
    'presetFilters' => [
      'errors' => 'Errors'
    ]
  ],
  'Attachment' => [
    'fields' => [
      'role' => '角色',
      'related' => '相关',
      'file' => '文件',
      'type' => '类型',
      'field' => '字段',
      'sourceId' => '源ID',
      'storage' => '存储',
      'size' => '大小(bytes)',
      'isBeingUploaded' => 'Is Being Uploaded'
    ],
    'options' => [
      'role' => [
        'Attachment' => '附加',
        'Inline Attachment' => 'Inline Attachment',
        'Import File' => '内联附件',
        'Export File' => '导出文件',
        'Mail Merge' => '邮件合并',
        'Mass Pdf' => 'Mass Pdf'
      ]
    ],
    'insertFromSourceLabels' => [
      'Document' => '插入文档'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'AuthLogRecord' => [
    'fields' => [
      'username' => '用户名',
      'ipAddress' => 'IP地址',
      'requestTime' => '请求时间',
      'createdAt' => '请求时间',
      'isDenied' => '被拒绝',
      'denialReason' => '拒绝原因',
      'portal' => '门户',
      'user' => '用户',
      'authToken' => '身份验证令牌已创建',
      'requestUrl' => '请求URL',
      'requestMethod' => '请求方法',
      'authTokenIsActive' => '身份验证令牌已激活',
      'authenticationMethod' => 'Authentication Method'
    ],
    'links' => [
      'authToken' => '创建身份验证令牌',
      'user' => '用户',
      'portal' => '门户',
      'actionHistoryRecords' => '历史操作'
    ],
    'presetFilters' => [
      'denied' => '禁止',
      'accepted' => '通过'
    ],
    'options' => [
      'denialReason' => [
        'CREDENTIALS' => '无效的证书',
        'WRONG_CODE' => 'Wrong code',
        'INACTIVE_USER' => '未激活用户',
        'IS_PORTAL_USER' => '门户用户',
        'IS_NOT_PORTAL_USER' => '不是门户用户',
        'USER_IS_NOT_IN_PORTAL' => '用户与门户无关',
        'IS_SYSTEM_USER' => 'Is system user',
        'FORBIDDEN' => 'Forbidden'
      ]
    ]
  ],
  'AuthToken' => [
    'fields' => [
      'user' => '用户',
      'ipAddress' => 'IP地址',
      'lastAccess' => '最后访问日期',
      'createdAt' => '登录日期',
      'isActive' => '已激活',
      'portal' => '门户'
    ],
    'links' => [
      'actionHistoryRecords' => '历史操作'
    ],
    'presetFilters' => [
      'active' => '激活',
      'inactive' => '未激活'
    ],
    'labels' => [
      'Set Inactive' => '设为未激活'
    ],
    'massActions' => [
      'setInactive' => '设为未激活'
    ]
  ],
  'AuthenticationProvider' => [
    'fields' => [
      'method' => 'Method'
    ],
    'labels' => [
      'Create AuthenticationProvider' => 'Create Provider'
    ]
  ],
  'Currency' => [
    'names' => [
      'AED' => 'United Arab Emirates Dirham',
      'AFN' => 'Afghan Afghani',
      'ALL' => 'Albanian Lek',
      'AMD' => 'Armenian Dram',
      'ANG' => 'Netherlands Antillean Guilder',
      'AOA' => 'Angolan Kwanza',
      'ARS' => 'Argentine Peso',
      'AUD' => 'Australian Dollar',
      'AWG' => 'Aruban Florin',
      'AZN' => 'Azerbaijani Manat',
      'BAM' => 'Bosnia-Herzegovina Convertible Mark',
      'BBD' => 'Barbadian Dollar',
      'BDT' => 'Bangladeshi Taka',
      'BGN' => 'Bulgarian Lev',
      'BHD' => 'Bahraini Dinar',
      'BIF' => 'Burundian Franc',
      'BMD' => 'Bermudan Dollar',
      'BND' => 'Brunei Dollar',
      'BOB' => 'Bolivian Boliviano',
      'BOV' => 'Bolivian Mvdol',
      'BRL' => 'Brazilian Real',
      'BSD' => 'Bahamian Dollar',
      'BTN' => 'Bhutanese Ngultrum',
      'BWP' => 'Botswanan Pula',
      'BYN' => 'Belarusian Ruble',
      'BZD' => 'Belize Dollar',
      'CAD' => 'Canadian Dollar',
      'CDF' => 'Congolese Franc',
      'CHE' => 'WIR Euro',
      'CHF' => 'Swiss Franc',
      'CHW' => 'WIR Franc',
      'CLF' => 'Chilean Unit of Account (UF)',
      'CLP' => 'Chilean Peso',
      'CNH' => 'Chinese Yuan (offshore)',
      'CNY' => 'Chinese Yuan',
      'COP' => 'Colombian Peso',
      'COU' => 'Colombian Real Value Unit',
      'CRC' => 'Costa Rican Colón',
      'CUC' => 'Cuban Convertible Peso',
      'CUP' => 'Cuban Peso',
      'CVE' => 'Cape Verdean Escudo',
      'CZK' => 'Czech Koruna',
      'DJF' => 'Djiboutian Franc',
      'DKK' => 'Danish Krone',
      'DOP' => 'Dominican Peso',
      'DZD' => 'Algerian Dinar',
      'EGP' => 'Egyptian Pound',
      'ERN' => 'Eritrean Nakfa',
      'ETB' => 'Ethiopian Birr',
      'EUR' => 'Euro',
      'FJD' => 'Fijian Dollar',
      'FKP' => 'Falkland Islands Pound',
      'GBP' => 'British Pound',
      'GEL' => 'Georgian Lari',
      'GHS' => 'Ghanaian Cedi',
      'GIP' => 'Gibraltar Pound',
      'GMD' => 'Gambian Dalasi',
      'GNF' => 'Guinean Franc',
      'GTQ' => 'Guatemalan Quetzal',
      'GYD' => 'Guyanaese Dollar',
      'HKD' => 'Hong Kong Dollar',
      'HNL' => 'Honduran Lempira',
      'HRK' => 'Croatian Kuna',
      'HTG' => 'Haitian Gourde',
      'HUF' => 'Hungarian Forint',
      'IDR' => 'Indonesian Rupiah',
      'ILS' => 'Israeli New Shekel',
      'INR' => 'Indian Rupee',
      'IQD' => 'Iraqi Dinar',
      'IRR' => 'Iranian Rial',
      'ISK' => 'Icelandic Króna',
      'JMD' => 'Jamaican Dollar',
      'JOD' => 'Jordanian Dinar',
      'JPY' => 'Japanese Yen',
      'KES' => 'Kenyan Shilling',
      'KGS' => 'Kyrgystani Som',
      'KHR' => 'Cambodian Riel',
      'KMF' => 'Comorian Franc',
      'KPW' => 'North Korean Won',
      'KRW' => 'South Korean Won',
      'KWD' => 'Kuwaiti Dinar',
      'KYD' => 'Cayman Islands Dollar',
      'KZT' => 'Kazakhstani Tenge',
      'LAK' => 'Laotian Kip',
      'LBP' => 'Lebanese Pound',
      'LKR' => 'Sri Lankan Rupee',
      'LRD' => 'Liberian Dollar',
      'LSL' => 'Lesotho Loti',
      'LYD' => 'Libyan Dinar',
      'MAD' => 'Moroccan Dirham',
      'MDL' => 'Moldovan Leu',
      'MGA' => 'Malagasy Ariary',
      'MKD' => 'Macedonian Denar',
      'MMK' => 'Myanmar Kyat',
      'MNT' => 'Mongolian Tugrik',
      'MOP' => 'Macanese Pataca',
      'MRO' => 'Mauritanian Ouguiya',
      'MUR' => 'Mauritian Rupee',
      'MWK' => 'Malawian Kwacha',
      'MXN' => 'Mexican Peso',
      'MXV' => 'Mexican Investment Unit',
      'MYR' => 'Malaysian Ringgit',
      'MZN' => 'Mozambican Metical',
      'NAD' => 'Namibian Dollar',
      'NGN' => 'Nigerian Naira',
      'NIO' => 'Nicaraguan Córdoba',
      'NOK' => 'Norwegian Krone',
      'NPR' => 'Nepalese Rupee',
      'NZD' => 'New Zealand Dollar',
      'OMR' => 'Omani Rial',
      'PAB' => 'Panamanian Balboa',
      'PEN' => 'Peruvian Sol',
      'PGK' => 'Papua New Guinean Kina',
      'PHP' => 'Philippine Piso',
      'PKR' => 'Pakistani Rupee',
      'PLN' => 'Polish Zloty',
      'PYG' => 'Paraguayan Guarani',
      'QAR' => 'Qatari Rial',
      'RON' => 'Romanian Leu',
      'RSD' => 'Serbian Dinar',
      'RUB' => 'Russian Ruble',
      'RWF' => 'Rwandan Franc',
      'SAR' => 'Saudi Riyal',
      'SBD' => 'Solomon Islands Dollar',
      'SCR' => 'Seychellois Rupee',
      'SDG' => 'Sudanese Pound',
      'SEK' => 'Swedish Krona',
      'SGD' => 'Singapore Dollar',
      'SHP' => 'St. Helena Pound',
      'SLL' => 'Sierra Leonean Leone',
      'SOS' => 'Somali Shilling',
      'SRD' => 'Surinamese Dollar',
      'SSP' => 'South Sudanese Pound',
      'STN' => 'São Tomé & Príncipe Dobra (2018)',
      'SYP' => 'Syrian Pound',
      'SZL' => 'Swazi Lilangeni',
      'SVC' => 'Salvadoran Colón',
      'THB' => 'Thai Baht',
      'TJS' => 'Tajikistani Somoni',
      'TND' => 'Tunisian Dinar',
      'TOP' => 'Tongan Paʻanga',
      'TRY' => 'Turkish Lira',
      'TTD' => 'Trinidad & Tobago Dollar',
      'TWD' => 'New Taiwan Dollar',
      'TZS' => 'Tanzanian Shilling',
      'UAH' => 'Ukrainian Hryvnia',
      'UGX' => 'Ugandan Shilling',
      'USD' => 'US Dollar',
      'USN' => 'US Dollar (Next day)',
      'UYI' => 'Uruguayan Peso (Indexed Units)',
      'UYU' => 'Uruguayan Peso',
      'UZS' => 'Uzbekistani Som',
      'VEF' => 'Venezuelan Bolívar',
      'VND' => 'Vietnamese Dong',
      'VUV' => 'Vanuatu Vatu',
      'WST' => 'Samoan Tala',
      'XAF' => 'Central African CFA Franc',
      'XCD' => 'East Caribbean Dollar',
      'XOF' => 'West African CFA Franc',
      'XPF' => 'CFP Franc',
      'YER' => 'Yemeni Rial',
      'ZAR' => 'South African Rand',
      'ZMW' => 'Zambian Kwacha',
      'ZWL' => 'Zimbabwe Dollar'
    ]
  ],
  'DashboardTemplate' => [
    'fields' => [
      'layout' => 'Layout',
      'append' => 'Append (don\'t remove user\'s tabs)'
    ],
    'links' => [],
    'labels' => [
      'Create DashboardTemplate' => 'Create Template',
      'Deploy to Users' => 'Deploy to Users',
      'Deploy to Team' => 'Deploy to Team'
    ]
  ],
  'DashletOptions' => [
    'fields' => [
      'title' => '标题',
      'dateFrom' => '开始日期',
      'dateTo' => '结束日期',
      'autorefreshInterval' => '自动刷新间隔',
      'displayRecords' => '显示记录',
      'isDoubleHeight' => '2倍高度',
      'mode' => '模式',
      'enabledScopeList' => '显示什么',
      'users' => '用户',
      'entityType' => '功能类型',
      'primaryFilter' => '主要过滤器',
      'boolFilterList' => '扩展过滤器',
      'sortBy' => '订单（字段）',
      'sortDirection' => '订单（方向）',
      'expandedLayout' => '布局',
      'skipOwn' => 'Don\'t show own records',
      'url' => 'URL',
      'dateFilter' => '日期过滤器',
      'text' => 'Text',
      'folder' => 'Folder',
      'team' => 'Team',
      'futureDays' => '接下来的 X 天',
      'useLastStage' => 'Group by last reached stage'
    ],
    'options' => [
      'mode' => [
        'agendaWeek' => '周（议程）',
        'basicWeek' => '周',
        'month' => '月',
        'basicDay' => '日',
        'agendaDay' => '日（议程）',
        'timeline' => '时间线'
      ],
      'sortDirection' => [
        'asc' => 'Ascending',
        'desc' => 'Descending'
      ]
    ],
    'messages' => [
      'selectEntityType' => '在看板设置里选择实体类型。'
    ],
    'tooltips' => [
      'skipOwn' => 'Actions made by your user account won\'t be displayed.'
    ]
  ],
  'DynamicLogic' => [
    'labels' => [
      'Field' => '字段'
    ],
    'options' => [
      'operators' => [
        'equals' => '等于',
        'notEquals' => '不等于',
        'greaterThan' => '大于',
        'lessThan' => '少于',
        'greaterThanOrEquals' => '大于或等于',
        'lessThanOrEquals' => '少于或者等于',
        'in' => '在里面',
        'notIn' => '不在里面',
        'inPast' => '过去',
        'inFuture' => '今后',
        'isToday' => '今天',
        'isTrue' => '正确',
        'isFalse' => '错误',
        'isEmpty' => '空',
        'isNotEmpty' => '不为空',
        'contains' => '包含',
        'notContains' => '不包含',
        'has' => '包含',
        'notHas' => '不包含',
        'startsWith' => 'Starts With',
        'endsWith' => 'Ends With',
        'matches' => 'Matches (reg exp)'
      ]
    ]
  ],
  'Email' => [
    'fields' => [
      'name' => '命名（主题）',
      'parent' => '关联',
      'status' => '状态',
      'dateSent' => '发送日期',
      'from' => '发件人',
      'to' => '收件人',
      'cc' => '抄送',
      'bcc' => '密送',
      'replyTo' => '回复',
      'replyToString' => '回复（字符串）',
      'personStringData' => 'Person String Data',
      'isHtml' => '是HTML',
      'body' => '正文',
      'bodyPlain' => '正文 (纯文本格式)',
      'subject' => '主题',
      'attachments' => '附件',
      'selectTemplate' => '选择模板',
      'fromEmailAddress' => 'From Address (link)',
      'emailAddress' => '邮件地址',
      'deliveryDate' => '邮寄日期',
      'account' => '账户',
      'users' => '用户',
      'replied' => '已回复',
      'replies' => '回复',
      'isRead' => '已读',
      'isNotRead' => '未读',
      'isImportant' => '重要',
      'isReplied' => '已回复',
      'isNotReplied' => '未回复',
      'isUsers' => '是用户的',
      'isUsersSent' => 'Is User\'s Sent',
      'inTrash' => '在垃圾箱',
      'inArchive' => 'In Archive',
      'folder' => '文件夹',
      'inboundEmails' => '组帐户',
      'emailAccounts' => '个人帐户',
      'hasAttachment' => '有附件',
      'assignedUsers' => '已指派用户',
      'sentBy' => '发送者',
      'toEmailAddresses' => '收件人地址',
      'ccEmailAddresses' => 'CC地址',
      'bccEmailAddresses' => 'BCC地址',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'messageId' => '信息 ID',
      'messageIdInternal' => '信息 ID (内部)',
      'folderId' => '文件夹编号',
      'folderString' => 'Folder',
      'fromName' => '发件人',
      'fromString' => '从字符串',
      'fromAddress' => '发件人地址',
      'replyToName' => 'Reply-To Name',
      'replyToAddress' => 'Reply-To Address',
      'isSystem' => 'Is System',
      'icsContents' => 'ICS Contents',
      'icsEventData' => 'ICS Event Data',
      'icsEventUid' => 'ICS Event UID',
      'createdEvent' => 'Created Event',
      'event' => 'Event',
      'icsEventDateStart' => 'ICS Event Date Start',
      'groupFolder' => 'Group Folder',
      'tasks' => 'Tasks'
    ],
    'links' => [
      'replied' => '已回复',
      'replies' => '回复',
      'inboundEmails' => '邮件组帐户',
      'emailAccounts' => '个人帐户',
      'assignedUsers' => '已指派用户',
      'sentBy' => '发送者',
      'attachments' => '附件',
      'fromEmailAddress' => '发件人地址',
      'toEmailAddresses' => '收件人地址',
      'ccEmailAddresses' => 'CC地址',
      'bccEmailAddresses' => 'BCC地址',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'createdEvent' => 'Created Event',
      'groupFolder' => 'Group Folder'
    ],
    'options' => [
      'status' => [
        'Draft' => '草稿',
        'Sending' => '发送中',
        'Sent' => '发送',
        'Archived' => '归档',
        'Received' => '已接收',
        'Failed' => '失败'
      ]
    ],
    'labels' => [
      'Create Email' => '归档邮件',
      'Archive Email' => '归档邮件',
      'Import EML' => 'Import EML',
      'Compose' => '写邮件',
      'Reply' => '回复',
      'Reply to All' => '回复全部',
      'Forward' => '转发',
      'Insert Field' => 'Insert Field',
      'Original message' => '原始消息',
      'Forwarded message' => '已转发消息',
      'Email Accounts' => '个人邮件帐户',
      'Inbound Emails' => '邮件组帐户',
      'Email Templates' => '邮件模板',
      'Send Test Email' => '发送测试邮件',
      'Send' => '发送',
      'Email Address' => '邮件地址',
      'Mark Read' => '标记为已读',
      'Sending...' => '发送中...',
      'Save Draft' => '保存草稿',
      'Mark all as read' => '标记所有为已读',
      'Show Plain Text' => '显示纯文本',
      'Mark as Important' => '标记为重要',
      'Unmark Importance' => '取消重要标记',
      'Move to Trash' => '移到垃圾箱',
      'Retrieve from Trash' => '从垃圾箱中取回',
      'Move to Folder' => '移动到文件夹',
      'Moved to Archive' => 'Moved to Archive',
      'Filters' => '筛选器',
      'Folders' => '文件夹',
      'Group Folders' => 'Group Folders',
      'No Subject' => 'No Subject',
      'View Users' => 'View Users',
      'Event' => 'Event',
      'View Attachments' => 'View Attachments',
      'Moved to Trash' => 'Moved to Trash',
      'Retrieved from Trash' => 'Retrieved from Trash',
      'Create Lead' => '创建潜在客户',
      'Create Contact' => '创建联系人',
      'Add to Contact' => '添加到联系人',
      'Add to Lead' => '添加至潜在客户',
      'Create Task' => '创建任务',
      'Create Case' => '创建工单'
    ],
    'strings' => [
      'sendingFailed' => 'Email sending failed'
    ],
    'messages' => [
      'alreadyImported' => 'The [email]({link}) already exists in the system.',
      'invalidCredentials' => 'Invalid credentials.',
      'unknownError' => 'Unknown error.',
      'recipientAddressRejected' => 'Recipient address rejected.',
      'noSmtpSetup' => 'SMTP is not configured: {link}',
      'testEmailSent' => '测试邮件已发送',
      'emailSent' => '邮件已发送',
      'savedAsDraft' => '保存为草稿',
      'sendConfirm' => 'Send the email?',
      'removeSelectedRecordsConfirmation' => 'Are you sure you want to remove selected emails?

They will be removed for other users too.',
      'removeRecordConfirmation' => 'Are you sure you want to remove the email?

It will be removed for other users too.',
      'confirmInsertTemplate' => '邮件正文将丢失,您确定要插入模板吗?'
    ],
    'presetFilters' => [
      'sent' => '已发送',
      'archived' => '归档',
      'inbox' => '收件箱',
      'drafts' => '草稿箱',
      'trash' => '垃圾箱',
      'archive' => 'Archive',
      'important' => '重要的'
    ],
    'actions' => [
      'moveToArchive' => 'Archive'
    ],
    'massActions' => [
      'markAsRead' => '标记为已读',
      'markAsNotRead' => '标记为未读',
      'markAsImportant' => '标记为重要',
      'markAsNotImportant' => '取消重要标记',
      'moveToTrash' => '移到垃圾箱',
      'moveToFolder' => '移动到文件夹',
      'moveToArchive' => 'Archive',
      'retrieveFromTrash' => '从垃圾箱回收'
    ],
    'otherFields' => [
      'file' => 'File'
    ]
  ],
  'EmailAccount' => [
    'fields' => [
      'name' => '名称',
      'status' => '状态',
      'host' => '主机',
      'username' => '用户名',
      'password' => '密码',
      'port' => '端口',
      'monitoredFolders' => '监视的文件夹',
      'security' => 'Security',
      'fetchSince' => '获取从',
      'emailAddress' => '邮件地址',
      'sentFolder' => '发送文件夹',
      'storeSentEmails' => '存储发送的邮件',
      'keepFetchedEmailsUnread' => '保持获取的邮件为未读',
      'emailFolder' => '放入文件夹',
      'connectedAt' => 'Connected At',
      'useImap' => '获取邮件',
      'useSmtp' => '使用SMTP',
      'smtpHost' => 'SMTP主机',
      'smtpPort' => 'SMTP端口',
      'smtpAuth' => 'SMTP授权',
      'smtpSecurity' => 'SMTP安全协议',
      'smtpAuthMechanism' => 'SMTP Auth Mechanism',
      'smtpUsername' => 'SMTP用户名',
      'smtpPassword' => 'SMTP密码'
    ],
    'links' => [
      'filters' => '过滤器',
      'emails' => '邮箱'
    ],
    'options' => [
      'status' => [
        'Active' => '启用',
        'Inactive' => '未启用'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN',
        'login' => 'LOGIN',
        'crammd5' => 'CRAM-MD5'
      ]
    ],
    'labels' => [
      'Create EmailAccount' => '创建邮件帐户',
      'IMAP' => 'IMAP',
      'Main' => '主要',
      'Test Connection' => '测试连接',
      'Send Test Email' => '发送编辑邮件',
      'SMTP' => '简单邮件传输协议'
    ],
    'presetFilters' => [
      'active' => 'Active'
    ],
    'messages' => [
      'couldNotConnectToImap' => '无法连接到IMAP服务器',
      'connectionIsOk' => '连接正常',
      'imapNotConnected' => 'Could not connect to [IMAP account](#EmailAccount/view/{id}).'
    ],
    'tooltips' => [
      'useSmtp' => 'The ability to send emails.',
      'emailAddress' => 'The user record (assigned user) should have the same email address to be able to use this email account for sending.',
      'monitoredFolders' => '多个文件夹用逗号分隔。

添加 ‘Sent’ 文件夹与外部邮件客户端同步已发邮件。',
      'storeSentEmails' => '发送的电子邮件将存储在IMAP服务器上,电子邮件地址字段应该与将要发送的电子邮件地址匹配。'
    ]
  ],
  'EmailAddress' => [
    'labels' => [
      'Primary' => '首选',
      'Opted Out' => '选择退出',
      'Invalid' => '无效'
    ],
    'fields' => [
      'optOut' => 'Opted Out',
      'invalid' => 'Invalid'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'EmailFilter' => [
    'fields' => [
      'from' => '从',
      'to' => '至',
      'subject' => '主题',
      'bodyContains' => '正文包含',
      'bodyContainsAll' => 'Body Contains All',
      'action' => '活动',
      'isGlobal' => '全局',
      'emailFolder' => '文件夹',
      'groupEmailFolder' => 'Group Email Folder',
      'markAsRead' => 'Mark as Read'
    ],
    'links' => [
      'emailFolder' => 'Folder',
      'groupEmailFolder' => 'Group Email Folder'
    ],
    'labels' => [
      'Create EmailFilter' => '创建邮件过滤器',
      'Emails' => '邮件'
    ],
    'options' => [
      'action' => [
        'None' => 'None',
        'Skip' => '忽略',
        'Move to Folder' => '放入文件夹',
        'Move to Group Folder' => 'Put in Group Folder'
      ]
    ],
    'tooltips' => [
      'name' => '给过滤器一个描述性名称。',
      'subject' => 'Use a wildcard *: 

 * `text*` – starts with text,
 * `*text*` – contains text,
 * `*text` – ends with text.',
      'bodyContains' => '电子邮件的正文包含任何指定的单词或短语。',
      'bodyContainsAll' => 'An email body contains all specified words or phrases.',
      'from' => '邮件正发往指定的地址,如不需要请留空,可以使用通配符*。',
      'to' => '邮件正在发往指定地址,如不需要请留空,可使用通配符 *。',
      'isGlobal' => '将此筛选器应用到系统中所有的入站邮件。'
    ]
  ],
  'EmailFolder' => [
    'fields' => [
      'skipNotifications' => '跳过通知'
    ],
    'labels' => [
      'Create EmailFolder' => '创建文件夹',
      'Manage Folders' => '管理文件夹',
      'Emails' => '邮箱'
    ]
  ],
  'EmailTemplate' => [
    'fields' => [
      'name' => '名称',
      'status' => '状态',
      'isHtml' => '是HTML',
      'body' => '正文',
      'subject' => '主题',
      'attachments' => '附件',
      'oneOff' => '一次性',
      'category' => '分类',
      'insertField' => 'Placeholders'
    ],
    'links' => [],
    'labels' => [
      'Create EmailTemplate' => '创建邮件模板',
      'Info' => '信息',
      'Available placeholders' => '可用变量'
    ],
    'messages' => [
      'infoText' => 'Available placeholders:

{optOutUrl} &#8211; URL for an unsubscribe link;

{optOutLink} &#8211; an unsubscribe link.'
    ],
    'tooltips' => [
      'oneOff' => '如果此模板你仅用一次则选中此项。例如，批量邮件。'
    ],
    'presetFilters' => [
      'actual' => '所有'
    ],
    'placeholderTexts' => [
      'today' => 'Today\'s date',
      'now' => 'Current date & time',
      'currentYear' => 'Current Year',
      'optOutUrl' => 'URL for an unsubscribe link',
      'optOutLink' => '取消订阅链接'
    ]
  ],
  'EmailTemplateCategory' => [
    'labels' => [
      'Create EmailTemplateCategory' => '创建分类',
      'Manage Categories' => '管理分类',
      'EmailTemplates' => '邮件模板'
    ],
    'fields' => [
      'order' => '顺序',
      'childList' => '子列表'
    ],
    'links' => [
      'emailTemplates' => '邮件模板'
    ]
  ],
  'EntityManager' => [
    'labels' => [
      'Fields' => '字段',
      'Relationships' => '关系',
      'Layouts' => 'Layouts',
      'Schedule' => '时间表',
      'Log' => '日志',
      'Formula' => '公式'
    ],
    'fields' => [
      'name' => '名称',
      'type' => '类型',
      'labelSingular' => '单标签',
      'labelPlural' => '多标签',
      'stream' => '信息流',
      'label' => '标签',
      'linkType' => '连接类型',
      'entity' => 'Entity',
      'entityForeign' => '外部实体',
      'linkForeign' => '外部连接',
      'link' => '连接',
      'labelForeign' => '外部标签',
      'sortBy' => '默认排序（字段）',
      'sortDirection' => '默认排序（方向）',
      'relationName' => '中间表名称',
      'linkMultipleField' => '连接多个字段',
      'linkMultipleFieldForeign' => '外部连接多个字段',
      'disabled' => '禁用',
      'textFilterFields' => '文本过滤字段',
      'audited' => '已审核',
      'auditedForeign' => '外部审核',
      'statusField' => '字段状态',
      'beforeSaveCustomScript' => '在保存自定义脚本之前',
      'beforeSaveApiScript' => 'API Before Save Script',
      'color' => '颜色',
      'kanbanViewMode' => '预览看板',
      'kanbanStatusIgnoreList' => '看板视图中被忽略的组',
      'iconClass' => '图标',
      'countDisabled' => 'Disable record count',
      'fullTextSearch' => '全文搜索',
      'parentEntityTypeList' => 'Parent Entity Types',
      'foreignLinkEntityTypeList' => 'Foreign Links',
      'optimisticConcurrencyControl' => 'Optimistic concurrency control',
      'updateDuplicateCheck' => 'Duplicate check on update',
      'duplicateCheckFieldList' => 'Duplicate check fields',
      'stars' => 'Stars',
      'layout' => 'Layout',
      'selectFilter' => 'Select Filter',
      'author' => 'Author',
      'module' => 'Module',
      'version' => 'Version',
      'primaryFilters' => 'Primary Filters',
      'activityStatusList' => 'Activity Statuses',
      'historyStatusList' => 'History Statuses',
      'completedStatusList' => 'Completed Statuses',
      'canceledStatusList' => 'Canceled Statuses'
    ],
    'options' => [
      'type' => [
        '' => '无',
        'Base' => '基本',
        'Person' => '个人',
        'CategoryTree' => '类别树',
        'Event' => '时间',
        'BasePlus' => '基础增强',
        'Company' => '公司'
      ],
      'linkType' => [
        'manyToMany' => '多对多',
        'oneToMany' => '一对多',
        'manyToOne' => '多对一',
        'oneToOneRight' => 'One-to-One Right',
        'oneToOneLeft' => 'One-to-One Left',
        'parentToChildren' => '父对子',
        'childrenToParent' => '子对父'
      ],
      'sortDirection' => [
        'asc' => '升序',
        'desc' => '降序'
      ],
      'module' => [
        'Custom' => 'Custom'
      ]
    ],
    'messages' => [
      'urlHashCopiedToClipboard' => 'A URL fragment for the *{name}* filter is copied to the clipboard. You can add it to the navbar.',
      'confirmRemoveLink' => 'Are you sure you want to remove the *{link}* relationship?',
      'nameIsAlreadyUsed' => 'Name \'{name}\' is already used.',
      'nameIsNotAllowed' => 'Name \'{name}\' is not allowed.',
      'nameIsTooLong' => 'Name is too long.',
      'confirmRemove' => 'Are you sure you want to remove the entity type from the system?',
      'entityCreated' => '实体已创建',
      'linkAlreadyExists' => '连接名称冲突。',
      'linkConflict' => '名称冲突：已存在同名连接或字段。',
      'beforeSaveCustomScript' => 'A script called every time before an entity is saved. Use for setting calculated fields.',
      'beforeSaveApiScript' => 'A script called on create and update API requests before an entity is saved. Use for custom validation and duplicate checking.'
    ],
    'tooltips' => [
      'duplicateCheckFieldList' => 'Which fields to check when performing checking for duplicates.',
      'updateDuplicateCheck' => 'Perform checking for duplicates when updating a record.',
      'optimisticConcurrencyControl' => 'Prevents writing conflicts.',
      'stars' => 'The ability to star records. Stars can be used by users to bookmark records.',
      'statusField' => '此字段的更新记录在信息流中。',
      'textFilterFields' => '文字搜索使用的字段。',
      'stream' => '不论实体是否有信息流。',
      'disabled' => '检查您的系统中是否不需要此实体。',
      'linkAudited' => '在信息流中将记录创建相关记录并链接现有记录。',
      'linkMultipleField' => '链接多字段提供了编辑关系的方便的方式。不要使用它，如果你可以有大量的相关记录。',
      'linkSelectFilter' => 'A primary filter to apply by default when selecting a record.',
      'entityType' => 'Base Plus  - 具有活动，历史和任务面板。活动 - 在“日历和活动”面板中可用。',
      'countDisabled' => 'Total number won\'t be displayed on the list view. Can decrease loading time when the DB table is big.',
      'fullTextSearch' => '需要运行重新构建。',
      'activityStatusList' => 'Status values determining that an activity record should be displayed in the Activity panel and considered as actual.',
      'historyStatusList' => 'Status values determining that an activity record should be displayed in the History panel.',
      'completedStatusList' => 'Status values determining that an activity is completed.',
      'canceledStatusList' => 'Status values determining that an activity is canceled and won\'t be taken into account in free/busy ranges.'
    ]
  ],
  'Export' => [
    'fields' => [
      'exportAllFields' => '导出所有字段',
      'fieldList' => '字段列表',
      'format' => '格式',
      'status' => 'Status',
      'xlsxLite' => 'Lite',
      'xlsxRecordLinks' => 'Record Links',
      'xlsxTitle' => 'Title'
    ],
    'options' => [
      'format' => [
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)'
      ],
      'status' => [
        'Pending' => 'Pending',
        'Running' => 'Running',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ],
    'tooltips' => [
      'xlsxLite' => 'Consumes much less memory. Recommended if a big number of records is exported.',
      'xlsxTitle' => 'Print a title and current date in the header.'
    ],
    'messages' => [
      'exportProcessed' => 'Export has been processed. Download the [file]({url}).',
      'infoText' => 'The export is being processed in idle by cron. It can take some time to finish. Closing this modal dialog won\'t affect the execution process.'
    ]
  ],
  'Extension' => [
    'fields' => [
      'name' => '名称',
      'version' => '版本',
      'description' => '描述',
      'isInstalled' => '已安装',
      'checkVersionUrl' => 'An URL for checking new versions'
    ],
    'labels' => [
      'Uninstall' => '卸载',
      'Install' => '安装'
    ],
    'messages' => [
      'uninstalled' => '扩展{name}已卸载',
      'fileExceedsMaxUploadSize' => 'The file size exceeds the max upload size {maxSize}. Consider increasing `post_max_size` or install the extension via CLI.'
    ]
  ],
  'ExternalAccount' => [
    'labels' => [
      'Connect' => '连接',
      'Disconnect' => 'Disconnect',
      'Disconnected' => 'Disconnected',
      'Connected' => '已连接'
    ],
    'help' => [],
    'messages' => [
      'externalAccountNoConnectDisabled' => 'External account for integration \'{integration}\' has been disabled due not being able to connect.'
    ]
  ],
  'FieldManager' => [
    'labels' => [
      'Dynamic Logic' => '动态逻辑',
      'Name' => '名称',
      'Label' => '标签',
      'Type' => '类型'
    ],
    'options' => [
      'dateTimeDefault' => [
        '' => '无',
        'javascript: return this.dateTime.getNow(1);' => '现在',
        'javascript: return this.dateTime.getNow(5);' => '现在（5分钟）',
        'javascript: return this.dateTime.getNow(15);' => '现在（15分钟）',
        'javascript: return this.dateTime.getNow(30);' => '现在（30分钟）',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12小时',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6天',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1周'
      ],
      'dateDefault' => [
        '' => '无',
        'javascript: return this.dateTime.getToday();' => '今天',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1天',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2天',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3天',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4天',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5天',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6天',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7天',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8天',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9天',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10天',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1周',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2周',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3周',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11个月',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1年'
      ],
      'barcodeType' => [
        'EAN13' => 'EAN-13',
        'EAN8' => 'EAN-8',
        'EAN5' => 'EAN-5',
        'EAN2' => 'EAN-2',
        'UPC' => 'UPC (A)',
        'UPCE' => 'UPC (E)',
        'pharmacode' => 'Pharmacode',
        'QRcode' => 'QR code'
      ],
      'globalRestrictions' => [
        'forbidden' => 'Forbidden',
        'internal' => 'Internal',
        'onlyAdmin' => 'Admin-only',
        'readOnly' => 'Read-only',
        'nonAdminReadOnly' => 'Non-admin read-only'
      ]
    ],
    'tooltips' => [
      'optionsReference' => 'Re-use options from another field.',
      'currencyDecimal' => 'Use the Decimal DB type. In the app, values will be represented as strings. Check this parameter if precision is required.',
      'cutHeight' => 'A text higher then a specified value will be cut with a \'show more\' button displayed.',
      'urlStrip' => 'Strip a protocol and a trailing slash.',
      'audited' => '更新将会记录在信息流中。',
      'required' => '字段将是强制性的。不能留空。',
      'default' => '值将在创建时默认设置。',
      'min' => '最小可接受的值。',
      'max' => '最大可接受的值。',
      'seeMoreDisabled' => '如果没有检查，那么长的文本将被缩短。',
      'lengthOfCut' => '文字可以在多长时间之前被剪掉。',
      'maxLength' => '最大可接受的文本长度。',
      'before' => '日期值应在指定字段的日期值之前。',
      'after' => '日期值应在指定字段的日期值之后。',
      'readOnly' => '用户不能指定字段值。但可以通过公式计算。',
      'readOnlyAfterCreate' => 'The field value can be specified when creating a new record. After that, the field becomes read-only. It can still be calculated by formula.',
      'fileAccept' => 'Which file types to accept. It\'s possible to add custom items.',
      'barcodeLastChar' => 'For EAN-13 type.',
      'maxFileSize' => '如果为空或0，则没有限制.',
      'conversionDisabled' => 'The currency conversion action won\'t be applied to this field.',
      'pattern' => 'A regular expression to check a field value against. Define an expression or select a predefined one.',
      'options' => 'A list of possible values and their labels.',
      'optionsArray' => 'A list of possible values and their labels. If empty, the field will allow entering custom values.',
      'maxCount' => 'Maximum number of items allowed to be selected.',
      'displayAsList' => 'Each item in a new line.',
      'optionsVarchar' => 'A list of autocomplete values.',
      'linkReadOnly' => 'Field value can\'t be specified by user. But can be calculated by formula.

It will also disable the ability to create a related record from relationship panels.',
      'relateOnImport' => 'When importing with this field, it will automatically relate a record with a matching foreign record. Use this functionality only if the foreign field is considered as unique.'
    ],
    'fieldParts' => [
      'address' => [
        'street' => '街道',
        'city' => '城市',
        'state' => '省市',
        'country' => '国家',
        'postalCode' => '邮编',
        'map' => '地图'
      ],
      'personName' => [
        'salutation' => '称呼',
        'first' => '名',
        'middle' => 'Middle',
        'last' => '姓'
      ],
      'currency' => [
        'converted' => '已换算',
        'currency' => '(Currency)'
      ],
      'datetimeOptional' => [
        'date' => '日期'
      ]
    ],
    'fieldInfo' => [
      'varchar' => 'A single-line text.',
      'enum' => 'Selectbox, only one value can be selected.',
      'text' => 'A multiline text with markdown support.',
      'date' => 'Date w/o time.',
      'datetime' => 'Date and time',
      'currency' => 'A currency value. A float number with a currency code.',
      'int' => 'A whole number.',
      'float' => 'A number with a decimal part.',
      'bool' => 'A checkbox. Two possible values: true and false.',
      'multiEnum' => 'A list of values, multiple values can be selected. The list is ordered.',
      'checklist' => 'A list of checkboxes.',
      'array' => 'A list of values, similar to Multi-Enum field.',
      'address' => 'An address with street, city, state, postal code and country.',
      'url' => 'For storing links.',
      'urlMultiple' => 'Multiple links.',
      'wysiwyg' => 'A text with HTML support.',
      'file' => 'For file uploading.',
      'image' => 'For image uploading.',
      'attachmentMultiple' => 'Allows to upload multiple files.',
      'number' => 'An auto-incrementing number of string type with a possible prefix and specific length.',
      'autoincrement' => 'A generated read-only auto-incrementing integer number.',
      'barcode' => 'A barcode. Can be printed to PDF.',
      'email' => 'A set of email addresses with their parameters: Opted-out, Invalid, Primary.',
      'phone' => 'A set of phone numbers with their parameters: Type, Opted-out, Invalid, Primary.',
      'foreign' => 'A field of a related record. Read-only.',
      'link' => 'A record related through Belongs-To (many-to-one or one-to-one) relationship.',
      'linkParent' => 'A record related through Belongs-To-Parent relationship. Can be of different entity types.',
      'linkMultiple' => 'A set of records related through Has-Many (many-to-many or one-to-many) relationship. Not all relationships have their link-multiple fields. Only those do, where Link-Multiple parameter(s) is enabled.'
    ],
    'messages' => [
      'confirmRemove' => 'Are you sure you want to remove the *{field}* field?

Field removal does not remove data from the database. Data from the database will be removed if you run hard rebuild.',
      'fieldNameIsNotAllowed' => 'Field name \'{field}\' is not allowed.',
      'fieldAlreadyExists' => 'Field \'{field}\' already exists in \'{entityType}\'.',
      'linkWithSameNameAlreadyExists' => 'Link with the name \'{field}\' already exists in \'{entityType}\'.'
    ]
  ],
  'Formula' => [
    'labels' => [
      'Check Syntax' => 'Check Syntax',
      'Run' => 'Run'
    ],
    'fields' => [
      'target' => 'Target',
      'targetType' => 'Target Type',
      'script' => 'Script',
      'output' => 'Output',
      'error' => 'Error'
    ],
    'messages' => [
      'runSuccess' => 'Executed successfully.',
      'runError' => 'Error.',
      'checkSyntaxSuccess' => 'Syntax is correct.',
      'checkSyntaxError' => 'Syntax error.',
      'emptyScript' => 'Script is empty.'
    ],
    'tooltips' => [
      'output' => 'Print values with the function `output\\printLine`.'
    ]
  ],
  'Global' => [
    'scopeNames' => [
      'Note' => 'Note',
      'Email' => '电子邮件',
      'User' => '用户',
      'Team' => '团队',
      'Role' => '角色',
      'EmailTemplate' => '邮件模板',
      'EmailTemplateCategory' => '邮件模板类别',
      'EmailAccount' => '个人邮件帐户',
      'EmailAccountScope' => '个人邮件帐户',
      'OutboundEmail' => '外发邮件',
      'ScheduledJob' => '计划任务',
      'ExternalAccount' => '外部帐户',
      'Extension' => '扩展',
      'Dashboard' => '仪表板',
      'InboundEmail' => '邮件组帐户',
      'Stream' => '信息流',
      'Import' => '导入',
      'ImportError' => 'Import Error',
      'Template' => '模板',
      'Job' => '工作',
      'EmailFilter' => '邮件过滤器',
      'Portal' => '门户',
      'PortalRole' => '门户角色',
      'Attachment' => '附件',
      'EmailFolder' => '邮件文件夹',
      'GroupEmailFolder' => 'Group Email Folder',
      'PortalUser' => '门户用户',
      'ApiUser' => 'API User',
      'ScheduledJobLogRecord' => '计划作业日志记录',
      'PasswordChangeRequest' => '要求修改密码',
      'ActionHistoryRecord' => '动作历史纪录',
      'AuthToken' => '授权令牌',
      'UniqueId' => '唯一身份',
      'LastViewed' => '最近看过',
      'Settings' => '设置',
      'FieldManager' => '字段管理',
      'Integration' => '集成',
      'LayoutManager' => '布局管理',
      'EntityManager' => '记录管理',
      'Export' => '导出',
      'DynamicLogic' => '动态逻辑',
      'DashletOptions' => '看板选项',
      'Admin' => '管理员',
      'Global' => '全局',
      'Preferences' => '属性',
      'EmailAddress' => 'Email 地址',
      'PhoneNumber' => '电话号码',
      'AppLogRecord' => 'App Log Record',
      'AuthLogRecord' => '身份验证日志记录',
      'AuthFailLogRecord' => '认证失败日志记录',
      'LeadCapture' => 'Lead Capture Entry Point',
      'LeadCaptureLogRecord' => 'Lead Capture Log Record',
      'ArrayValue' => '数组值',
      'DashboardTemplate' => 'Dashboard Template',
      'Currency' => 'Currency',
      'LayoutSet' => 'Layout Set',
      'Webhook' => 'Webhook',
      'WebhookQueueItem' => 'Webhook Queue Item',
      'Mass Action' => 'Mass Action',
      'WorkingTimeCalendar' => 'Working Time Calendar',
      'WorkingTimeRange' => 'Working Time Exception',
      'AuthenticationProvider' => 'Authentication Provider',
      'GlobalStream' => 'Global Stream',
      'AddressCountry' => 'Address Country',
      'Account' => '客户',
      'Contact' => '联系人',
      'Lead' => '潜在客户',
      'Target' => '目标',
      'Opportunity' => '商机',
      'Meeting' => '会晤',
      'Calendar' => '日历',
      'Call' => '通话',
      'Task' => '任务',
      'Case' => '工单',
      'Document' => '文件',
      'DocumentFolder' => '文档文件夹',
      'Campaign' => '营销活动',
      'TargetList' => '目标列表',
      'MassEmail' => '群发电子邮件',
      'EmailQueueItem' => '电子邮件队列项',
      'CampaignTrackingUrl' => '跟踪网址',
      'Activities' => '活动',
      'KnowledgeBaseArticle' => '知识库文章',
      'KnowledgeBaseCategory' => '知识库类别',
      'CampaignLogRecord' => '营销活动日志记录'
    ],
    'scopeNamesPlural' => [
      'Note' => 'Notes',
      'Email' => '电子邮件',
      'User' => '用户',
      'Team' => '团队',
      'Role' => '角色',
      'EmailTemplate' => '邮件模板',
      'EmailTemplateCategory' => '邮件模板类别',
      'EmailAccount' => '个人邮件帐户',
      'EmailAccountScope' => '个人邮件帐户',
      'OutboundEmail' => '外发邮件',
      'ScheduledJob' => '计划任务',
      'ExternalAccount' => '外部帐户',
      'Extension' => '扩展',
      'Dashboard' => '仪表板',
      'InboundEmail' => '邮件组帐户',
      'EmailAddress' => 'Email Addresses',
      'PhoneNumber' => 'Phone Numbers',
      'Stream' => '信息流',
      'Import' => '导入结果',
      'ImportError' => 'Import Errors',
      'Template' => '模板',
      'Job' => '工作',
      'EmailFilter' => '邮件过滤器',
      'Portal' => '门户',
      'PortalRole' => '门户角色',
      'Attachment' => '附件',
      'EmailFolder' => '邮件文件夹',
      'GroupEmailFolder' => 'Group Email Folders',
      'PortalUser' => '门户用户',
      'ApiUser' => 'API Users',
      'ScheduledJobLogRecord' => '计划作业日志记录',
      'PasswordChangeRequest' => '要求更改密码',
      'ActionHistoryRecord' => '历史操作',
      'AuthToken' => '授权令牌',
      'UniqueId' => '唯一身份',
      'LastViewed' => '最近看过',
      'AppLogRecord' => 'App Log',
      'AuthLogRecord' => '身份验证登录',
      'AuthFailLogRecord' => '身份验证失败的日志',
      'LeadCapture' => '潜在客户捕获',
      'LeadCaptureLogRecord' => '潜在客户捕获日志',
      'ArrayValue' => 'Array Values',
      'DashboardTemplate' => 'Dashboard Templates',
      'Currency' => 'Currency',
      'LayoutSet' => 'Layout Sets',
      'Webhook' => 'Webhooks',
      'WebhookQueueItem' => 'Webhook Queue Items',
      'WorkingTimeCalendar' => 'Working Time Calendars',
      'WorkingTimeRange' => 'Working Time Exceptions',
      'AuthenticationProvider' => 'Authentication Providers',
      'GlobalStream' => 'Global Stream',
      'AddressCountry' => 'Address Countries',
      'Account' => '客户',
      'Contact' => '联系人',
      'Lead' => '潜在客户',
      'Target' => '目标',
      'Opportunity' => '商机',
      'Meeting' => '会晤',
      'Calendar' => '日历',
      'Call' => '通话',
      'Task' => '任务',
      'Case' => '工单',
      'Document' => '文件',
      'DocumentFolder' => '文档文件夹',
      'Campaign' => '营销活动',
      'TargetList' => '目标列表',
      'MassEmail' => '群发电子邮件',
      'EmailQueueItem' => '电子邮件队列项',
      'CampaignTrackingUrl' => '跟踪网址',
      'Activities' => '活动',
      'KnowledgeBaseArticle' => '知识库',
      'KnowledgeBaseCategory' => '知识库类别',
      'CampaignLogRecord' => '营销活动日志记录'
    ],
    'labels' => [
      'Previous Page' => 'Previous Page',
      'Next Page' => 'Next Page',
      'First Page' => 'First Page',
      'Last Page' => 'Last Page',
      'Page' => 'Page',
      'Sort' => 'Sort',
      'Misc' => '杂项',
      'Merge' => '合并',
      'None' => '无',
      'Home' => '家',
      'by' => '由',
      'Proceed' => 'Proceed',
      'Saved' => '已保存',
      'Error' => '错误',
      'Select' => '选择',
      'Not valid' => '无效',
      'Please wait...' => '请稍候...',
      'Please wait' => '请稍候',
      'Attached' => 'Attached',
      'Loading...' => '载入中...',
      'Uploading...' => '正在上传...',
      'Sending...' => '正在发送...',
      'Merged' => '已合并',
      'Removed' => '已移除',
      'Posted' => '发信息',
      'Linked' => '已连接',
      'Unlinked' => '未连接',
      'Done' => '完成',
      'Access denied' => '拒绝访问',
      'Not found' => '未找到',
      'Access' => '访问',
      'Are you sure?' => '你确定？',
      'Record has been removed' => '记录已删除',
      'Wrong username/password' => '用户名或密码错误',
      'Post cannot be empty' => '内容不能为空',
      'Username can not be empty!' => '用户名不能为空！',
      'Cache is not enabled' => '缓存未启用',
      'Cache has been cleared' => '缓存已清除',
      'Rebuild has been done' => '重建已经完成',
      'Return to Application' => '返回至应用',
      'Modified' => '已修改',
      'Created' => '已创建',
      'Create' => '创建',
      'create' => '创建',
      'Overview' => '概览',
      'Details' => '详情',
      'Add Field' => '添加字段',
      'Add Dashlet' => '添加看板',
      'Filter' => '过滤',
      'Edit Dashboard' => '编辑仪表板',
      'Add' => '添加',
      'Add Item' => '添加项',
      'Reset' => '重置',
      'Menu' => '菜单',
      'More' => '更多',
      'Search' => '搜索',
      'Only My' => '仅自己',
      'Open' => '打开',
      'Admin' => '管理员',
      'About' => '关于',
      'Refresh' => '刷新',
      'Remove' => '移除',
      'Restore' => 'Restore',
      'Options' => '选项',
      'Username' => '用户名',
      'Password' => '密码',
      'Login' => '登录',
      'Log Out' => '退出',
      'Log in' => 'Log in',
      'Log in as' => 'Log in as',
      'Sign in' => 'Sign in',
      'Preferences' => '属性',
      'State' => '省',
      'Street' => '街',
      'Country' => '国家',
      'City' => '城市',
      'PostalCode' => '邮编',
      'Star' => 'Star',
      'Unstar' => 'Unstar',
      'Starred' => 'Starred',
      'Followed' => '已关注',
      'Follow' => '关注',
      'Followers' => '关注者',
      'Clear Local Cache' => '清除本地缓存',
      'Actions' => '操作',
      'Delete' => '删除',
      'Update' => '更新',
      'Save' => '保存',
      'Edit' => '编辑',
      'View' => '预览',
      'Cancel' => '取消',
      'Apply' => '应用',
      'Unlink' => '取消连接',
      'Mass Update' => '批量更新',
      'Export' => '导出',
      'No Data' => '没有数据',
      'No Access' => '没有访问',
      'All' => '所有',
      'Active' => '激活',
      'Inactive' => '未激活',
      'Write your comment here' => '在这里写下您的评论',
      'Post' => '帖子',
      'Stream' => '信息流',
      'Show more' => '显示更多',
      'Dashlet Options' => '看板选项',
      'Full Form' => '完整格式',
      'Insert' => '插入',
      'Person' => '人',
      'First Name' => '名字',
      'Last Name' => '姓氏',
      'Middle Name' => 'Middle Name',
      'Original' => '源',
      'You' => '你',
      'you' => '你',
      'change' => '更改',
      'Change' => '更改',
      'Primary' => '首选',
      'Save Filter' => '保存过滤器',
      'Remove Filter' => 'Remove Filter',
      'Ready' => 'Ready',
      'Administration' => '管理',
      'Run Import' => '运行导入',
      'Duplicate' => '创建副本',
      'Notifications' => '通知',
      'Mark all read' => '标记所有为已读',
      'See more' => '查看更多',
      'Today' => '今天',
      'Tomorrow' => '明天',
      'Yesterday' => '昨天',
      'Submit' => '提交',
      'Close' => '关闭',
      'Yes' => '是',
      'No' => '否',
      'Select All Results' => '选择所有结果',
      'Value' => '值',
      'Current version' => '当前版本',
      'List View' => '列表视图',
      'Tree View' => '树型视图',
      'Unlink All' => '全部取消连接',
      'Total' => '总计',
      'Print' => 'Print',
      'Print to PDF' => '打印到 PDF',
      'Default' => '默认',
      'Number' => '编号',
      'From' => '从',
      'To' => '至',
      'Create Post' => '创建帖子',
      'Previous Entry' => '上一记录',
      'Next Entry' => '下一记录',
      'View List' => '列表视图',
      'Attach File' => '附加文件',
      'Skip' => '跳过',
      'Attribute' => '属性',
      'Function' => '功能',
      'Self-Assign' => '自分配',
      'Self-Assigned' => '指派给自己',
      'Expand' => '扩展',
      'Collapse' => '折叠',
      'New notifications' => '新通知',
      'Manage Categories' => '管理类别',
      'Manage Folders' => '管理文件夹',
      'Convert to' => '转换',
      'View Personal Data' => '查看个人数据',
      'Personal Data' => '个人数据',
      'Erase' => 'Erase',
      'View Followers' => 'View Followers',
      'Convert Currency' => 'Convert Currency',
      'View on Map' => 'View on Map',
      'Preview' => 'Preview',
      'Move Over' => 'Move Over',
      'Up' => 'Up',
      'Save & Continue Editing' => 'Save & Continue Editing',
      'Save & New' => 'Save & New',
      'Field' => 'Field',
      'Resolution' => 'Resolution',
      'Resolve Conflict' => 'Resolve Conflict',
      'Download' => 'Download',
      'Global Search' => 'Global Search',
      'Show Navigation Panel' => 'Show Navigation Panel',
      'Hide Navigation Panel' => 'Hide Navigation Panel',
      'Copy to Clipboard' => 'Copy to Clipboard',
      'Copied to clipboard' => 'Copied to clipboard',
      'Audit Log' => 'Audit Log',
      'View Audit Log' => 'View Audit Log',
      'Schedule' => 'Schedule',
      'Log' => 'Log',
      'Scheduler' => 'Scheduler',
      'Create InboundEmail' => '创建入站电子邮件',
      'Activities' => '活动',
      'History' => '历史',
      'Attendees' => '参加者',
      'Schedule Meeting' => '安排会晤',
      'Schedule Call' => '计划通话',
      'Compose Email' => '写邮件',
      'Log Meeting' => '会晤会议',
      'Log Call' => '通话记录',
      'Archive Email' => '存档电子邮件',
      'Create Task' => '创建任务',
      'Tasks' => '任务',
      'Merging...' => '合并中...',
      'Removing...' => '正在移除...',
      'Unlinking...' => '正在取消连接...',
      'Posting...' => '信息发送中…',
      'Saving...' => '保存中…'
    ],
    'messages' => [
      'pleaseWait' => '请稍候...',
      'loading' => '载入中...',
      'saving' => '保存中…',
      'confirmLeaveOutMessage' => '你确定要离开吗？',
      'notModified' => '你没有修改记录',
      'duplicate' => '您创建的记录可能已经存在',
      'dropToAttach' => '降到附件',
      'pageNumberIsOutOfBound' => 'Page number is out of bound',
      'fieldUrlExceedsMaxLength' => 'Encoded URL exceeds max length of {maxLength}',
      'fieldNotMatchingPattern' => '{field} does not match the pattern `{pattern}`',
      'fieldNotMatchingPattern$noBadCharacters' => '{field} contains not allowed characters',
      'fieldNotMatchingPattern$noAsciiSpecialCharacters' => '{field} should not contain ASCII special characters',
      'fieldNotMatchingPattern$latinLetters' => '{field} can contain only latin letters',
      'fieldNotMatchingPattern$latinLettersDigits' => '{field} can contain only latin letters and digits',
      'fieldNotMatchingPattern$latinLettersDigitsWhitespace' => '{field} can contain only latin letters, digits and whitespace',
      'fieldNotMatchingPattern$latinLettersWhitespace' => '{field} can contain only latin letters and whitespace',
      'fieldNotMatchingPattern$digits' => '{field} can contain only digits',
      'fieldNotMatchingPattern$uriOptionalProtocol' => '{field} must be a valid URL',
      'fieldNotMatchingPattern$phoneNumberLoose' => '{field} contains characters not allowed in a phone number',
      'fieldInvalid' => '{field} is invalid',
      'fieldIsRequired' => '{field} 是必选的',
      'fieldPhoneInvalid' => '{field} is invalid',
      'fieldPhoneInvalidCode' => 'Invalid country code',
      'fieldPhoneTooShort' => '{field} is too short',
      'fieldPhoneTooLong' => '{field} is too long',
      'fieldPhoneInvalidCharacters' => 'Only digits, latin letters and characters `-+_@:#().` are allowed',
      'fieldPhoneExtensionTooLong' => 'Extension should not be longer than {maxLength}',
      'fieldShouldBeEmail' => '{field}应该是一个有效的电子邮件',
      'fieldShouldBeFloat' => '{field}应该是一个有效的浮点数',
      'fieldShouldBeInt' => '{field}应该是一个有效的整数',
      'fieldShouldBeNumber' => '{field} should be a valid number',
      'fieldShouldBeDate' => '{field}应该是有效的日期',
      'fieldShouldBeDatetime' => '{field}应该是有效的日期/时间',
      'fieldShouldAfter' => '{field}应该在{otherField}之后',
      'fieldShouldBefore' => '{field}应该在{otherField}之前',
      'fieldShouldBeBetween' => '{field}应在{min}和{max}之间',
      'fieldShouldBeLess' => '{field}应小于{value}',
      'fieldShouldBeGreater' => '{field}应大于{value}',
      'fieldBadPasswordConfirm' => '{field}未被妥善确认',
      'fieldMaxFileSizeError' => '文件大小不超过{max}Mb',
      'fieldValueDuplicate' => 'Duplicate value',
      'fieldIsUploading' => '正在上传',
      'fieldExceedsMaxCount' => 'Count exceeds max allowed {maxCount}',
      'barcodeInvalid' => '{field} is not valid {type}',
      'arrayItemMaxLength' => 'Item shouldn\'t be longer than {max} characters',
      'resetPreferencesDone' => '属性已重置为默认值',
      'confirmation' => '你确定吗？',
      'unlinkAllConfirmation' => '你确定要取消所有相关记录的连接吗？',
      'resetPreferencesConfirmation' => '你确定要将属性重置为默认值吗？',
      'removeRecordConfirmation' => '你确定要删除该记录吗？',
      'unlinkRecordConfirmation' => '你确定要取消相关记录的链接吗？',
      'removeSelectedRecordsConfirmation' => '你确定要移除所选记录吗？',
      'unlinkSelectedRecordsConfirmation' => 'Are you sure you want to unlink selected records?',
      'massUpdateResult' => '{count} 条记录已更新',
      'massUpdateResultSingle' => '{count} 记录已更新',
      'recalculateFormulaConfirmation' => 'Are you sure you want to recalculate formula for selected records?',
      'noRecordsUpdated' => '没有记录被更新',
      'massRemoveResult' => '{count} 条记录已删除',
      'massRemoveResultSingle' => '{count} 记录已删除',
      'noRecordsRemoved' => '没有记录被删除',
      'clickToRefresh' => '点击刷新',
      'writeYourCommentHere' => '在这里写评论',
      'writeMessageToUser' => '写消息给{user}',
      'writeMessageToSelf' => '在你的信息流里写条信息',
      'typeAndPressEnter' => '输入并按Enter键',
      'checkForNewNotifications' => '检查新通知',
      'checkForNewNotes' => '检查',
      'internalPost' => '邮件只能被内部用户',
      'internalPostTitle' => '邮件只能由内部用户看到',
      'done' => '已做',
      'notUpdated' => 'Not updated',
      'confirmMassFollow' => '您确定要跟踪选定的记录吗？',
      'confirmMassUnfollow' => '您确定要取消跟踪所选记录吗？',
      'massFollowResult' => '{count}记录现已被跟踪',
      'massUnfollowResult' => '{count}记录现已被取消跟踪',
      'massFollowResultSingle' => '{count}记录现已被跟踪',
      'massUnfollowResultSingle' => '{count}记录现已被取消跟踪',
      'massFollowZeroResult' => '没有任何跟踪',
      'massUnfollowZeroResult' => '没有任何取消跟踪',
      'erasePersonalDataConfirmation' => '选中的字段将被永久删除。你确定？',
      'maintenanceModeError' => 'The application currently is in maintenance mode.',
      'maintenanceMode' => 'The application currently is in maintenance mode. Only admin users have access.

Maintenance mode can be disabled at Administration → Settings.',
      'resolveSaveConflict' => 'The record has been modified. You need to resolve the conflict before you can save the record.',
      'massPrintPdfMaxCountError' => '无法打印超过 {maxCount} 条记录。',
      'massActionProcessed' => 'Mass action has been processed.',
      'validationFailure' => 'Backend validation failure.

Field: `{field}`
Validation: `{type}`',
      'extensionLicenseInvalid' => 'Invalid \'{name}\' extension license.',
      'extensionLicenseExpired' => 'The \'{name}\' extension license subscription has expired.',
      'extensionLicenseSoftExpired' => 'The \'{name}\' extension license subscription has expired.',
      'confirmAppRefresh' => 'The application has been updated. It is recommended to refresh the page to ensure the proper functioning.',
      'loggedOutLeaveOut' => 'Logged out. The session is inactive. You may lose unsaved form data after page refresh. You may need to make a copy.',
      'noAccessToRecord' => 'Operation requires `{action}` access to record.',
      'noAccessToForeignRecord' => 'Operation requires `{action}` access to foreign record.',
      'noLinkAccess' => 'Can\'t relate with {foreignEntityType} record through the link \'{link}\'. No access.',
      'cannotUnrelateRequiredLink' => 'Can\'t unrelate required link.',
      'cannotRelateNonExisting' => 'Can\'t relate with non-existing {foreignEntityType} record.',
      'cannotRelateForbidden' => 'Can\'t relate with forbidden {foreignEntityType} record. `{action}` access required.',
      'cannotRelateForbiddenLink' => 'No access to link \'{link}\'.',
      'cannotLinkAlreadyLinked' => 'Cannot link an already linked record.',
      'error404' => 'The url you requested can\'t be handled.',
      'error403' => 'You don\'t have an access to this area.',
      'emptyMassUpdate' => 'No fields available for Mass Update.',
      'attemptIntervalFailure' => 'The operation is not allowed during a specific time interval. Wait for some time before the next attempt.',
      'confirmRestoreFromAudit' => 'The previous values will be set in a form. Then you can save the record to restore the previous values.',
      'starsLimitExceeded' => 'The number of stars exceeded the limit.',
      'select2OrMoreRecords' => 'Select 2 or more records',
      'selectNotMoreThanNumberRecords' => 'Select not more than {number} records',
      'selectAtLeastOneRecord' => 'Select at least one record',
      'duplicateConflict' => 'A record already exists.',
      'posting' => '正在发信息...'
    ],
    'boolFilters' => [
      'onlyMy' => '仅自己',
      'onlyMyTeam' => 'My Team',
      'followed' => '已关注'
    ],
    'presetFilters' => [
      'followed' => '已关注',
      'all' => '所有',
      'starred' => 'Starred'
    ],
    'massActions' => [
      'delete' => 'Delete',
      'remove' => '移除',
      'merge' => '合并',
      'update' => 'Update',
      'massUpdate' => '批量更新',
      'unlink' => 'Unlink',
      'export' => '导出',
      'follow' => '跟踪',
      'unfollow' => '取消跟踪',
      'convertCurrency' => '转换货币',
      'recalculateFormula' => 'Recalculate Formula',
      'printPdf' => '打印为PDF'
    ],
    'fields' => [
      'name' => '名称',
      'firstName' => '名字',
      'lastName' => '姓氏',
      'middleName' => 'Middle Name',
      'salutationName' => '称呼',
      'assignedUser' => '已指派用户',
      'assignedUsers' => '已指派用户',
      'emailAddress' => '电子邮件',
      'emailAddressData' => '电子邮件地址数据',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'emailAddressIsInvalid' => 'Email Address is Invalid',
      'assignedUserName' => '已指派用户名',
      'teams' => '团队',
      'users' => 'Users',
      'createdAt' => '创建于',
      'modifiedAt' => '修改于',
      'createdBy' => '创建者',
      'modifiedBy' => '修改者',
      'description' => '描述',
      'address' => '地址',
      'phoneNumber' => '电话',
      'phoneNumberMobile' => '电话（手机）',
      'phoneNumberHome' => '电话（家庭）',
      'phoneNumberFax' => '电话（传真）',
      'phoneNumberOffice' => '电话（办公）',
      'phoneNumberOther' => '电话（其他）',
      'phoneNumberData' => '电话号码数据',
      'phoneNumberIsOptedOut' => 'Phone Number is Opted-Out',
      'phoneNumberIsInvalid' => 'Phone Number is Invalid',
      'order' => '订购',
      'parent' => '上级目录',
      'children' => '下级目录',
      'id' => 'ID',
      'ids' => '身份证',
      'type' => '类型',
      'names' => '姓名',
      'types' => 'Types',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'childList' => 'Child List',
      'billingAddressCity' => '城市',
      'billingAddressCountry' => '国家',
      'billingAddressPostalCode' => '邮政编码',
      'billingAddressState' => '州',
      'billingAddressStreet' => '街道',
      'billingAddressMap' => '地图',
      'addressCity' => '城市',
      'addressStreet' => '街道',
      'addressCountry' => '国家',
      'addressState' => '州',
      'addressPostalCode' => '邮政编码',
      'addressMap' => '地图',
      'shippingAddressCity' => '城市（邮寄）',
      'shippingAddressStreet' => '街道（邮寄）',
      'shippingAddressCountry' => '省（邮寄）',
      'shippingAddressState' => '国家（邮寄）',
      'shippingAddressPostalCode' => '邮政编码（邮寄）',
      'shippingAddressMap' => '地图（邮寄）'
    ],
    'links' => [
      'assignedUser' => '已指派用于',
      'createdBy' => '创建者',
      'modifiedBy' => '修改者',
      'team' => '团队',
      'roles' => '角色',
      'teams' => '团队',
      'users' => '用户',
      'parent' => '父母',
      'children' => '子女',
      'contacts' => '联系人',
      'opportunities' => '商机',
      'leads' => '潜在客户',
      'meetings' => '会晤',
      'calls' => '通话',
      'tasks' => '任务',
      'emails' => '电子邮件',
      'accounts' => '客户',
      'cases' => '工单',
      'documents' => '文件',
      'account' => '客户',
      'opportunity' => '商机',
      'contact' => '联系人'
    ],
    'dashlets' => [
      'Stream' => '信息流',
      'Emails' => '我的收件箱',
      'Iframe' => 'Iframe',
      'Records' => '记录清单',
      'Memo' => 'Memo',
      'Leads' => '我的潜在客户',
      'Opportunities' => '我的商机',
      'Tasks' => '我的任务',
      'Cases' => '我的工单',
      'Calendar' => '日历',
      'Calls' => '我的通话',
      'Meetings' => '我的会晤',
      'OpportunitiesByStage' => '商机阶段',
      'OpportunitiesByLeadSource' => '源自潜在客户的商机',
      'SalesByMonth' => '按月销售',
      'SalesPipeline' => '销售渠道',
      'Activities' => '我的活动'
    ],
    'notificationMessages' => [
      'assign' => '{entityType}{entity}已分配给你',
      'emailReceived' => '收到{from}的邮件',
      'entityRemoved' => '{user}已移除{entityType} {entity}',
      'eventAttendee' => '{user} added you to {entityType} {entity}'
    ],
    'streamMessages' => [
      'post' => '{user}在{entityType}发信息：{entity}',
      'attach' => '{user}附加在{entityType}{entity}',
      'status' => '{user}更新{entityType}{entity}的{field}',
      'update' => '{user}更新了{entityType}{entity}',
      'postTargetTeam' => '{user}发信息到团队{target}',
      'postTargetTeams' => '{user}发信息到小组{target}',
      'postTargetPortal' => '{user}发信息到门户{target}',
      'postTargetPortals' => '{user}发信息到门户{target}',
      'postTarget' => '{user}发信息到{target}',
      'postTargetYou' => '{user}发信息给您',
      'postTargetYouAndOthers' => '{user}发信息给您和{target}',
      'postTargetAll' => '{user}发信息到所有',
      'postTargetSelf' => '{user}给自己发信息',
      'postTargetSelfAndOthers' => '{user}发信息给{target}和用户他们自己',
      'mentionInPost' => '{user}在{entityType}{entity}中提到{mentioned}',
      'mentionYouInPost' => '{user}在{entityType}{entity}中提及了您',
      'mentionInPostTarget' => '{user}在文章中提到',
      'mentionYouInPostTarget' => '{user}在邮件中将您提到了{target}',
      'mentionYouInPostTargetAll' => '{user}在邮件中提到你所有',
      'mentionYouInPostTargetNoTarget' => '{user}在帖子中提到你',
      'create' => '{user}创建{entityType}{entity}',
      'createThis' => '{user}创建{entityType}',
      'createAssignedThis' => '{user}创建{entityType}并指派给{assignee}',
      'createAssigned' => '{user}创建{entityType}{entity}并指派给{assignee}',
      'createAssignedYou' => '{user}创建{entityType}{entity}并指派给你',
      'createAssignedThisSelf' => '{user}创建{entityType}并指派给自己',
      'createAssignedSelf' => '{user}创建了{entityType}{entity}并指派给自己',
      'assign' => '{user}指派{entityType}{entity}给{assignee}',
      'assignThis' => '{user}指派{entityType}给{assignee}',
      'assignYou' => '{user}指派了{entityType}{entity}给你',
      'assignThisVoid' => '{user}取消{entityType}的指派',
      'assignVoid' => '{user}取消{entityType}{entity}的指派',
      'assignThisSelf' => '{user}把{entityType}指派给自己',
      'assignSelf' => '{user}把{entityType}{entity}指派给自己',
      'postThis' => '{user} posted',
      'attachThis' => '添加附件',
      'statusThis' => '{user}更新{field}',
      'updateThis' => '{user}更新{entityType}',
      'createRelatedThis' => '{user} created with {relatedEntityType} {relatedEntity} related to this {entityType}',
      'createRelated' => '{user} created with {relatedEntityType} {relatedEntity} related to {entityType} {entity}',
      'relate' => '{user} linked {relatedEntityType} {relatedEntity} with {entityType} {entity}',
      'relateThis' => '{user} linked {relatedEntityType} {relatedEntity} with this {entityType}',
      'unrelate' => '{user} unlinked {relatedEntityType} {relatedEntity} from {entityType} {entity}',
      'unrelateThis' => '{user} unlinked {relatedEntityType} {relatedEntity} from this {entityType}',
      'emailReceivedFromThis' => '收到{from}的电子邮件',
      'emailReceivedInitialFromThis' => '从{from}这个{entityType}创建收到的电子邮件',
      'emailReceivedThis' => '已收到的电子邮件',
      'emailReceivedInitialThis' => '电子邮件收到此{entityType}创建',
      'emailReceivedFrom' => '从{from}收到的电子邮件中，涉及到的{entityType}{entity)',
      'emailReceivedFromInitial' => '从{from}，{entityType}{entity}创建收到的电子邮件',
      'emailReceived' => '收到的电子邮件与{entityType}{entity}有关',
      'emailReceivedInitial' => '收到电子邮件：{entityType} {entity} created',
      'emailReceivedInitialFrom' => '从{from}，{entityType}{entity}创建收到的电子邮件',
      'emailSent' => '{by}发送与{entityType}{entity}相关的电子邮件',
      'emailSentThis' => '{by}发送电子邮件',
      'eventConfirmationAccepted' => '{invitee} accepted participation in {entityType} {entity}',
      'eventConfirmationDeclined' => '{invitee} declined participation in {entityType} {entity}',
      'eventConfirmationTentative' => '{invitee} is tentative about participation in {entityType} {entity}',
      'eventConfirmationAcceptedThis' => '{invitee} accepted participation',
      'eventConfirmationDeclinedThis' => '{invitee} declined participation',
      'eventConfirmationTentativeThis' => '{invitee} is tentative about participation'
    ],
    'streamMessagesMale' => [
      'postTargetSelfAndOthers' => '{user}发信息给{target}和他自己'
    ],
    'streamMessagesFemale' => [
      'postTargetSelfAndOthers' => '{user}发信息给{target}和她自己'
    ],
    'lists' => [
      'monthNames' => [
        0 => '一月',
        1 => '二月',
        2 => '三月',
        3 => '四月',
        4 => '五月',
        5 => '六月',
        6 => '七月',
        7 => '八月',
        8 => '九月',
        9 => '十月',
        10 => '十一月',
        11 => '十二月'
      ],
      'monthNamesShort' => [
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'May',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dec'
      ],
      'dayNames' => [
        0 => '周日',
        1 => '周一',
        2 => '周二',
        3 => '周三',
        4 => '周四',
        5 => '周五',
        6 => '周六'
      ],
      'dayNamesShort' => [
        0 => '周日',
        1 => '周一',
        2 => '周二',
        3 => '周三',
        4 => '周四',
        5 => '周五',
        6 => '周六'
      ],
      'dayNamesMin' => [
        0 => 'Su',
        1 => 'Mo',
        2 => 'Tu',
        3 => 'We',
        4 => 'Th',
        5 => 'Fr',
        6 => 'Sa'
      ]
    ],
    'durationUnits' => [
      'd' => '天',
      'h' => '小时',
      'm' => '分',
      's' => '秒'
    ],
    'options' => [
      'salutationName' => [
        'Mr.' => '先生',
        'Mrs.' => '太太',
        'Ms.' => '女士',
        'Dr.' => '博士'
      ],
      'language' => [
        'ar_AR' => 'Arabic',
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)'
      ],
      'dateSearchRanges' => [
        'on' => '在',
        'notOn' => '不在',
        'after' => '之后',
        'before' => '之前',
        'between' => '之间',
        'today' => '今天',
        'past' => '过去',
        'future' => '未来',
        'currentMonth' => '这个月',
        'lastMonth' => '上个月',
        'nextMonth' => '下个月',
        'currentQuarter' => '当前季度',
        'lastQuarter' => '上季度',
        'currentYear' => '今年',
        'lastYear' => '去年',
        'lastSevenDays' => '最近7天',
        'lastXDays' => '最近X天',
        'nextXDays' => '下一个X天',
        'ever' => '永远',
        'isEmpty' => '为空',
        'olderThanXDays' => '早于X天',
        'afterXDays' => 'X天后',
        'currentFiscalYear' => 'Current Fiscal Year',
        'lastFiscalYear' => 'Last Fiscal Year',
        'currentFiscalQuarter' => 'Current Fiscal Quarter',
        'lastFiscalQuarter' => 'Last Fiscal Quarter'
      ],
      'searchRanges' => [
        'is' => '是的',
        'isEmpty' => '为空',
        'isNotEmpty' => '不为空',
        'isOneOf' => '任何',
        'isFromTeams' => '来自团队',
        'isNot' => '不是',
        'isNotOneOf' => '没有',
        'anyOf' => '任何',
        'allOf' => 'All Of',
        'noneOf' => '没有',
        'any' => 'Any'
      ],
      'varcharSearchRanges' => [
        'equals' => '等于',
        'like' => '类似 (%)',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => '以...开始',
        'endsWith' => '以...结束',
        'contains' => '包含',
        'notContains' => '不包含',
        'isEmpty' => '为空',
        'isNotEmpty' => '不为空',
        'notEquals' => '不等于'
      ],
      'intSearchRanges' => [
        'equals' => '等于',
        'notEquals' => '不等于',
        'greaterThan' => '比...更棒',
        'lessThan' => '少于',
        'greaterThanOrEquals' => '大于或等于',
        'lessThanOrEquals' => '小于或等于',
        'between' => '之间',
        'isEmpty' => '为空',
        'isNotEmpty' => '非空'
      ],
      'autorefreshInterval' => [
        0 => '无',
        '0.5' => '30 秒',
        1 => '1 分钟',
        2 => '2 分钟',
        5 => '5 分钟',
        10 => '10 分钟'
      ],
      'phoneNumber' => [
        'Mobile' => '手机',
        'Office' => '办公室',
        'Fax' => '传真',
        'Home' => '家庭',
        'Other' => '其他'
      ],
      'saveConflictResolution' => [
        'current' => 'Current',
        'actual' => 'Actual',
        'original' => 'Original'
      ],
      'reminderTypes' => [
        'Popup' => '通知',
        'Email' => '电子邮件'
      ]
    ],
    'sets' => [
      'summernote' => [
        'NOTICE' => '你可以在这里找到翻译：https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => [
          'bold' => '粗体',
          'italic' => '斜体',
          'underline' => '下划线',
          'strike' => '删除线',
          'clear' => '移除字体样式',
          'height' => '行高',
          'name' => '字体',
          'size' => '字体大小'
        ],
        'image' => [
          'image' => '图片',
          'insert' => '插入图像',
          'resizeFull' => '调至最大',
          'resizeHalf' => '调至一半',
          'resizeQuarter' => '调至四分之一',
          'floatLeft' => '左浮动',
          'floatRight' => '右浮动',
          'floatNone' => '无浮动',
          'dragImageHere' => '将图像拖至此处',
          'selectFromFiles' => '从文件选择',
          'url' => '图片 URL',
          'remove' => '移除图像'
        ],
        'link' => [
          'link' => '链接',
          'insert' => '插入链接',
          'unlink' => '取消链接',
          'edit' => '编辑',
          'textToDisplay' => '要显示的文本',
          'url' => '此链接应打开哪个 URL？',
          'openInNewWindow' => '在新窗口中打开'
        ],
        'video' => [
          'video' => '视频',
          'videoLink' => '视频链接',
          'insert' => '插入视频',
          'url' => '视频 URL？',
          'providers' => '(YouTube, Vimeo, Vine, Instagram 或 DailyMotion)'
        ],
        'table' => [
          'table' => '表格'
        ],
        'hr' => [
          'insert' => '插入水平规则'
        ],
        'style' => [
          'style' => '样式',
          'normal' => '正常',
          'blockquote' => '引用',
          'pre' => '代码',
          'h1' => '标题 1',
          'h2' => '标题 2',
          'h3' => '标题 3',
          'h4' => '标题 4',
          'h5' => '标题 5',
          'h6' => '标题 6'
        ],
        'lists' => [
          'unordered' => '无序列表',
          'ordered' => '有序列表'
        ],
        'options' => [
          'help' => '帮助',
          'fullscreen' => '全屏',
          'codeview' => '代码视图'
        ],
        'paragraph' => [
          'paragraph' => '段落',
          'outdent' => '减少缩进',
          'indent' => '缩进',
          'left' => '左对齐',
          'center' => '居中对齐',
          'right' => '右对齐',
          'justify' => '两端对齐'
        ],
        'color' => [
          'recent' => '最近的颜色',
          'more' => '更多颜色',
          'background' => '背景颜色',
          'foreground' => '字体颜色',
          'transparent' => '透明',
          'setTransparent' => '设置透明度',
          'reset' => '重置',
          'resetToDefault' => '重置为默认'
        ],
        'shortcut' => [
          'shortcuts' => '键盘快捷键',
          'close' => '关闭',
          'textFormatting' => '文本格式化',
          'action' => '行动',
          'paragraphFormatting' => '段落格式化',
          'documentStyle' => '文档样式'
        ],
        'history' => [
          'undo' => '撤消',
          'redo' => '重做'
        ]
      ]
    ],
    'listViewModes' => [
      'list' => '列表',
      'kanban' => 'Kanban'
    ],
    'themes' => [
      'Dark' => 'Dark',
      'Light' => 'Light',
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL',
      'Sakura' => 'Sakura',
      'Violet' => 'Violet',
      'Hazyblue' => 'Hazyblue',
      'Glass' => 'Glass'
    ],
    'themeNavbars' => [
      'side' => 'Side Navbar',
      'top' => 'Top Navbar'
    ],
    'fieldValidations' => [
      'required' => 'Required',
      'maxCount' => 'Max Count',
      'maxLength' => 'Max Length',
      'pattern' => 'Pattern Matching',
      'emailAddress' => 'Valid Email Address',
      'phoneNumber' => 'Valid Phone Number',
      'array' => 'Array',
      'arrayOfString' => 'Array of Strings',
      'valid' => 'Validity',
      'noEmptyString' => 'No Empty String',
      'max' => 'Max Value',
      'min' => 'Min Value'
    ],
    'fieldValidationExplanations' => [
      'valid' => 'Invalid value.',
      'maxLength' => 'Value length exceeds maximum value.',
      'phone_valid' => 'Phone number is not valid. May be caused by a wrong or empty country code.',
      'url_valid' => 'Invalid URL value.',
      'currency_valid' => 'Invalid amount value.',
      'currency_validCurrency' => 'The currency code value is invalid or not allowed.',
      'varchar_pattern' => 'Likely, the value contains not allowed characters.',
      'email_emailAddress' => 'Invalid email address value.',
      'phone_phoneNumber' => 'Invalid phone number value.',
      'datetimeOptional_valid' => 'Invalid date-time value.',
      'datetime_valid' => 'Invalid date-time value.',
      'date_valid' => 'Invalid date value.',
      'enum_valid' => 'Invalid enum value. The value must be one of defined enum options. An empty value is allowed only if the field has an empty option.',
      'int_valid' => 'Invalid integer number value.',
      'float_valid' => 'Invalid number value.',
      'multiEnum_valid' => 'Invalid multi-enum value. Values must be one of defined field options.'
    ],
    'navbarTabs' => [
      'Business' => 'Business',
      'Marketing' => 'Marketing',
      'Support' => 'Support',
      'CRM' => 'CRM',
      'Activities' => 'Activities'
    ],
    'wysiwygLabels' => [
      'cell' => 'Cell',
      'align' => 'Align',
      'width' => 'Width',
      'height' => 'Height',
      'borderWidth' => 'Border Width',
      'borderColor' => 'Border Color',
      'cellPadding' => 'Cell Padding',
      'backgroundColor' => 'Background Color',
      'verticalAlign' => 'Vertical Align'
    ],
    'wysiwygOptions' => [
      'align' => [
        'left' => 'Left',
        'center' => 'Center',
        'right' => 'Right'
      ],
      'verticalAlign' => [
        'top' => 'Top',
        'middle' => 'Middle',
        'bottom' => 'Bottom'
      ]
    ],
    'detailViewModes' => [
      'detail' => 'Detail'
    ]
  ],
  'GroupEmailFolder' => [
    'links' => [
      'emails' => 'Emails'
    ],
    'labels' => [
      'Create GroupEmailFolder' => 'Create Folder'
    ]
  ],
  'Import' => [
    'labels' => [
      'New import with same params' => 'New import with same params',
      'Revert Import' => '反向导入',
      'Return to Import' => '返回导入',
      'Run Import' => '运行导入',
      'Back' => '返回',
      'Field Mapping' => '字段映射',
      'Default Values' => '默认值',
      'Add Field' => '添加字段',
      'Created' => '已创建',
      'Updated' => '已更新',
      'Result' => '结果',
      'Show records' => '显示记录',
      'Remove Duplicates' => '移除重复',
      'importedCount' => '已导入（计数）',
      'duplicateCount' => '重复（计数）',
      'updatedCount' => '已更新（计数）',
      'Create Only' => '仅创建',
      'Create and Update' => '创建和更新',
      'Update Only' => '仅更新',
      'Update by' => '更新者',
      'Set as Not Duplicate' => '设置为不重复',
      'File (CSV)' => '文件(CSV)',
      'First Row Value' => '第一行值',
      'Skip' => '跳过',
      'Header Row Value' => '标题行值',
      'Field' => '字段',
      'What to Import?' => '要导入什么？',
      'Entity Type' => '功能类型',
      'What to do?' => '做什么？',
      'Properties' => '属性',
      'Header Row' => '标题行',
      'Person Name Format' => '人名格式',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => '字段分隔符',
      'Date Format' => '日期格式',
      'Decimal Mark' => '十进制标志',
      'Text Qualifier' => '文本限定符',
      'Time Format' => '时间格式',
      'Currency' => '货币',
      'Preview' => '预览',
      'Next' => '下一步',
      'Step 1' => '步骤 1',
      'Step 2' => '步骤 2',
      'Double Quote' => '双引号',
      'Single Quote' => '单引号',
      'Imported' => '已导入',
      'Duplicates' => '副本',
      'Skip searching for duplicates' => '跳过重复项',
      'Timezone' => '时区',
      'Remove Import Log' => '删除导入日志',
      'New Import' => '新的导入',
      'Import Results' => '导入结果',
      'Run Manually' => 'Run Manually',
      'Silent Mode' => 'Silent Mode',
      'Export' => 'Export'
    ],
    'messages' => [
      'importRunning' => 'Import running...',
      'noErrors' => 'No errors',
      'utf8' => '应该为UTF-8编码',
      'duplicatesRemoved' => '去重',
      'inIdle' => '空闲时执行',
      'revert' => '这将永久删除所有导入的记录。',
      'removeDuplicates' => '这将永久删除所有被识别为重复的导入记录。',
      'confirmRevert' => '这将永久删除所有导入的记录。你确定？',
      'confirmRemoveDuplicates' => '这将永久删除所有被识别为重复的导入记录。你确定？',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You won\'t be able to revert import results. Are you sure?',
      'removeImportLog' => '这将删除导入日志。将保留所有导入的记录。如果您确定导入没问题，请使用它。'
    ],
    'params' => [
      'phoneNumberCountry' => 'Telephone country code'
    ],
    'fields' => [
      'file' => '文件',
      'entityType' => '功能类型',
      'imported' => '已导入记录',
      'duplicates' => '重复记录',
      'updated' => '已更新记录',
      'status' => '状态'
    ],
    'links' => [
      'errors' => 'Errors'
    ],
    'options' => [
      'status' => [
        'Failed' => '已失败',
        'Standby' => 'Standby',
        'Pending' => 'Pending',
        'In Process' => '处理中',
        'Complete' => '完成'
      ],
      'personNameFormat' => [
        'f l' => 'First Last',
        'l f' => 'Last First',
        'f m l' => 'First Middle Last',
        'l f m' => 'Last First Middle',
        'l, f' => 'Last, First'
      ]
    ],
    'strings' => [
      'commandToRun' => 'Command to run (from CLI)',
      'saveAsDefault' => 'Save as default'
    ],
    'tooltips' => [
      'manualMode' => 'If checked, you will need to run import manually from CLI. Command will be shown after setting up the import.',
      'silentMode' => 'A majority of after-save scripts will be skipped, stream notes won\'t be created. Import will run faster.'
    ]
  ],
  'ImportError' => [
    'fields' => [
      'type' => 'Type',
      'validationFailures' => 'Validation Failures',
      'import' => 'Import',
      'rowIndex' => 'Row Index',
      'exportRowIndex' => 'Export Row Index',
      'lineNumber' => 'Line Number',
      'exportLineNumber' => 'Export Line Number',
      'row' => 'Row',
      'entityType' => 'Entity Type'
    ],
    'options' => [
      'type' => [
        'Validation' => 'Validation',
        'Access' => 'Access',
        'Not-Found' => 'Not-Found'
      ]
    ],
    'tooltips' => [
      'lineNumber' => 'A line number in the original CSV.',
      'exportLineNumber' => 'A line number in the export CSV.'
    ]
  ],
  'InboundEmail' => [
    'fields' => [
      'name' => '名称',
      'emailAddress' => '电子邮件地址',
      'team' => '目标团队',
      'status' => '状态',
      'assignToUser' => '指派给用户',
      'host' => 'SMTP服务器',
      'username' => '用户名',
      'password' => '密码',
      'port' => '端口',
      'monitoredFolders' => '监视文件夹',
      'trashFolder' => '垃圾文件夹',
      'security' => 'Security',
      'createCase' => '创建工单',
      'reply' => '自动回复',
      'caseDistribution' => '工单分发',
      'replyEmailTemplate' => '回复邮件模板',
      'replyFromAddress' => '回复发件地址',
      'replyToAddress' => '回复收件地址',
      'replyFromName' => '回复发件名',
      'targetUserPosition' => '目标用户位置',
      'fetchSince' => '获取自',
      'addAllTeamUsers' => '为所有团队用户',
      'teams' => '团队',
      'sentFolder' => '发件箱',
      'storeSentEmails' => '保存发送邮件',
      'keepFetchedEmailsUnread' => 'Keep Fetched Emails Unread',
      'connectedAt' => 'Connected At',
      'excludeFromReply' => 'Exclude from Reply',
      'useImap' => '获取邮件',
      'useSmtp' => '使用SMTP',
      'smtpHost' => 'SMTP主机',
      'smtpPort' => 'SMTP端口',
      'smtpAuth' => 'SMTP验证',
      'smtpSecurity' => 'SMTP安全协议',
      'smtpAuthMechanism' => 'SMTP Auth Mechanism',
      'smtpUsername' => 'SMTP用户名',
      'smtpPassword' => 'SMTP密码',
      'fromName' => '发件人',
      'smtpIsShared' => '共享',
      'smtpIsForMassEmail' => 'SMTP可用于大规模电子邮件',
      'groupEmailFolder' => 'Group Email Folder',
      'isSystem' => 'Is System'
    ],
    'tooltips' => [
      'isSystem' => 'Is the system email account.',
      'useSmtp' => 'The ability to send emails.',
      'reply' => '通知他们的电子邮件已收到电子邮件发件人。

 只有一个电子邮件会期间的时间，以防止循环一段时间被发送到特定的收件人。',
      'createCase' => '自动从传入电子邮件创建工单。',
      'replyToAddress' => '指定此邮箱的电子邮件地址，以便响应到这里。',
      'caseDistribution' => '如何分配工单，直接指派给用户或团队。',
      'assignToUser' => '用户工单将会指派给。',
      'team' => '团队工单将会指派给。',
      'teams' => '团队电子邮件将会指派给。',
      'targetUserPosition' => '具有指定位置的用户将与工单一起分发。',
      'addAllTeamUsers' => '电子邮件将出现在指定团队的所有用户的“收件箱”中。',
      'monitoredFolders' => '多个文件夹用逗号分隔。',
      'smtpIsShared' => '如果勾选此选项，用户就可以使用SMTP发送电子邮件。可用性由角色通过组电子邮件帐户权限控制',
      'smtpIsForMassEmail' => '如果勾选的话，SMTP将可用于群发邮件',
      'storeSentEmails' => '发送的电子邮件将存储在IMAP服务器上。',
      'groupEmailFolder' => 'Put incoming emails in a group folder.',
      'excludeFromReply' => 'When replying on emails sent to this account\'s email address, its email address won\'t be added to CC.

Note that by enabling this parameter, the email address of this account will be exposed to users who have access to send Emails.'
    ],
    'links' => [
      'filters' => '过滤器',
      'emails' => '邮箱',
      'assignToUser' => '分配给用户',
      'groupEmailFolder' => 'Group Email Folder'
    ],
    'options' => [
      'status' => [
        'Active' => '激活',
        'Inactive' => '未激活'
      ],
      'caseDistribution' => [
        '' => '没有',
        'Direct-Assignment' => '直接分配',
        'Round-Robin' => '循环',
        'Least-Busy' => '最不忙'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN',
        'login' => 'LOGIN',
        'crammd5' => 'CRAM-MD5'
      ]
    ],
    'labels' => [
      'Create InboundEmail' => '创建电子邮件帐户',
      'IMAP' => 'IMAP',
      'Actions' => '操作',
      'Main' => '主要'
    ],
    'messages' => [
      'couldNotConnectToImap' => '无法连接到IMAP服务器',
      'imapNotConnected' => 'Could not connect to group [IMAP account](#InboundEmail/view/{id}).'
    ]
  ],
  'Integration' => [
    'fields' => [
      'enabled' => '启用',
      'clientId' => '客户端ID',
      'clientSecret' => '客户端密钥',
      'redirectUri' => '重定向URI',
      'apiKey' => '接口密匙'
    ],
    'titles' => [
      'GoogleMaps' => '谷歌地图'
    ],
    'messages' => [
      'selectIntegration' => '从菜单中选择一个积分。',
      'noIntegrations' => '没有集成可用。'
    ],
    'help' => [
      'Google' => '**Obtain OAuth 2.0 credentials from the Google Developers Console.**

Visit [Google Developers Console](https://console.developers.google.com/project) to obtain OAuth 2.0 credentials such as a Client ID and Client Secret that are known to both Google and EspoCRM application.',
      'GoogleMaps' => 'Obtain API key [here](https://developers.google.com/maps/documentation/javascript/get-api-key).'
    ]
  ],
  'Job' => [
    'fields' => [
      'status' => '状态',
      'executeTime' => '执行At',
      'executedAt' => 'Executed At',
      'startedAt' => 'Started At',
      'attempts' => '尝试左',
      'failedAttempts' => '失败尝试',
      'serviceName' => '服务',
      'method' => '方法',
      'methodName' => '方法',
      'scheduledJob' => '计划作业',
      'scheduledJobJob' => '计划工作名称',
      'data' => '数据',
      'targetType' => 'Target Type',
      'targetId' => 'Target ID',
      'number' => 'Number',
      'queue' => 'Queue',
      'group' => 'Group',
      'className' => 'Class Name',
      'targetGroup' => 'Target Group',
      'job' => 'Job'
    ],
    'options' => [
      'status' => [
        'Pending' => '有待',
        'Success' => '成功',
        'Running' => '运行',
        'Failed' => '失败'
      ]
    ]
  ],
  'LayoutManager' => [
    'fields' => [
      'width' => '宽度（％）',
      'link' => '链接',
      'notSortable' => '不可排序',
      'align' => '对齐',
      'panelName' => '面板名称',
      'style' => '样式',
      'sticked' => '已贴',
      'isMuted' => 'Muted color',
      'isLarge' => '大字体',
      'hidden' => 'Hidden',
      'noLabel' => 'No Label',
      'dynamicLogicVisible' => '使面板可见的条件',
      'dynamicLogicStyled' => 'Conditions making style applied',
      'tabLabel' => 'Tab Label',
      'tabBreak' => 'Tab-Break',
      'noteText' => 'Note Text',
      'noteStyle' => 'Note Style'
    ],
    'options' => [
      'align' => [
        'left' => '剩下',
        'right' => '对'
      ],
      'style' => [
        'default' => '默认',
        'success' => '成功',
        'danger' => '危险',
        'info' => '信息',
        'warning' => '警告',
        'primary' => '主要'
      ]
    ],
    'labels' => [
      'New panel' => '新的面板',
      'Layout' => '布局'
    ],
    'messages' => [
      'alreadyExists' => 'Layout `{name}` already exists.',
      'createInfo' => 'Custom list layouts can be used by relationship panels.',
      'cantBeEmpty' => 'Layout can\'t be empty.',
      'fieldsIncompatible' => 'Fields can\'t be on the layout together: {fields}.'
    ],
    'tooltips' => [
      'noteText' => 'A text to be displayed in the panel. Markdown is supported.',
      'tabBreak' => 'A separate tab for the panel and all following panels until the next tab-break.',
      'noLabel' => 'Don\'t display a column label in the header.',
      'notSortable' => 'Disables the ability to sort by the column.',
      'width' => 'A column width. It\'s recommended to have one column without specified width, usually it should be the *Name* field.',
      'sticked' => 'The panel will be sticked to the panel above. No gap between panels.',
      'hiddenPanel' => 'Need to click \'show more\' to see the panel.',
      'panelStyle' => 'A color of the panel.',
      'dynamicLogicVisible' => 'If set, the panel will be hidden unless the condition is met.',
      'dynamicLogicStyled' => 'A color will be applied if a specific condition is met . The color is defined by the *Style* parameter.',
      'link' => 'If checked, then a field value will be displayed as a link pointing to the detail view of the record. Usually it is used for *Name* fields.'
    ]
  ],
  'LayoutSet' => [
    'fields' => [
      'layoutList' => 'Layouts'
    ],
    'labels' => [
      'Create LayoutSet' => 'Create Layout Set',
      'Edit Layouts' => 'Edit Layouts'
    ],
    'tooltips' => []
  ],
  'LeadCapture' => [
    'fields' => [
      'name' => '名称',
      'campaign' => '运动',
      'isActive' => '激活',
      'subscribeToTargetList' => '订阅目标列表',
      'subscribeContactToTargetList' => '订阅目标列表',
      'targetList' => '目标列表',
      'fieldList' => 'Payload Fields',
      'optInConfirmation' => 'Double Opt-In',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'optInConfirmationLifetime' => 'Opt-in confirmation lifetime (hours)',
      'optInConfirmationSuccessMessage' => 'Text to show after opt-in confirmation',
      'leadSource' => 'Lead Source',
      'apiKey' => 'API 密钥',
      'targetTeam' => '目标团队',
      'exampleRequestMethod' => '方法',
      'exampleRequestUrl' => '网址',
      'exampleRequestPayload' => 'Payload',
      'exampleRequestHeaders' => 'Headers',
      'createLeadBeforeOptInConfirmation' => 'Create Lead before confirmation',
      'skipOptInConfirmationIfSubscribed' => 'Skip confirmation if lead is already in target list',
      'smtpAccount' => 'SMTP Account',
      'inboundEmail' => 'Group Email Account',
      'duplicateCheck' => 'Duplicate Check',
      'phoneNumberCountry' => 'Telephone country code'
    ],
    'links' => [
      'targetList' => '目标列表',
      'campaign' => '运行',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'targetTeam' => '目标团队',
      'inboundEmail' => 'Group Email Account',
      'logRecords' => '日志'
    ],
    'labels' => [
      'Create LeadCapture' => '创建入口点',
      'Generate New API Key' => '生成新的 API 密钥',
      'Request' => '请求',
      'Confirm Opt-In' => '确认选择'
    ],
    'messages' => [
      'generateApiKey' => '创建新的API KEY',
      'optInConfirmationExpired' => '选择确认链接已过期',
      'optInIsConfirmed' => '选择确认。'
    ],
    'tooltips' => [
      'optInConfirmationSuccessMessage' => '支持Markdown'
    ]
  ],
  'LeadCaptureLogRecord' => [
    'fields' => [
      'number' => '号码',
      'data' => '数据',
      'target' => '目标',
      'leadCapture' => 'Lead Capture',
      'createdAt' => 'Entered At',
      'isCreated' => 'Is Lead Created'
    ],
    'links' => [
      'leadCapture' => 'Lead Capture',
      'target' => '目标'
    ]
  ],
  'MassAction' => [
    'fields' => [
      'status' => 'Status',
      'processedCount' => 'Processed Count'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pending',
        'Running' => 'Running',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ],
    'messages' => [
      'infoText' => 'The mass action is being processed in idle by cron. It can take some time to finish. Closing this modal dialog won\'t affect the execution process.'
    ]
  ],
  'Note' => [
    'fields' => [
      'post' => '帖子',
      'attachments' => '附件',
      'targetType' => '目标',
      'teams' => '团队',
      'users' => '用户',
      'portals' => '门户',
      'type' => '类型',
      'isGlobal' => '全局',
      'isInternal' => '内部（用于内部用户）',
      'isPinned' => 'Is Pinned',
      'related' => '相关的',
      'createdByGender' => 'Created By Gender',
      'data' => '数据',
      'number' => '数字'
    ],
    'filters' => [
      'all' => '所有',
      'posts' => '帖子',
      'updates' => '更新',
      'activity' => 'Activity'
    ],
    'options' => [
      'targetType' => [
        'self' => '给我自己',
        'users' => '给特殊用户',
        'teams' => '给特殊对',
        'all' => '所有内部门户',
        'portals' => '给门户用户'
      ],
      'type' => [
        'Post' => '帖子',
        'Create' => 'Create',
        'CreateRelated' => 'Create Related',
        'Update' => 'Update',
        'Status' => 'Status',
        'Assign' => 'Assign',
        'Relate' => 'Relate',
        'Unrelate' => 'Unrelate',
        'EmailReceived' => 'Email Received',
        'EmailSent' => 'Email Sent'
      ]
    ],
    'labels' => [
      'View Posts' => 'View Posts',
      'View Activity' => 'View Activity',
      'Pin' => 'Pin',
      'Unpin' => 'Unpin',
      'Pinned' => 'Pinned'
    ],
    'messages' => [
      'writeMessage' => '在这里写信息',
      'pinnedMaxCountExceeded' => 'Cannot pin more notes. Max allowed number is {count}.'
    ],
    'links' => [
      'portals' => 'Portals',
      'attachments' => 'Attachments',
      'superParent' => 'Super Parent',
      'related' => 'Related'
    ]
  ],
  'PhoneNumber' => [
    'fields' => [
      'type' => 'Type',
      'optOut' => 'Opted Out',
      'invalid' => 'Invalid',
      'numeric' => 'Numeric Value'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'Portal' => [
    'fields' => [
      'name' => '名称',
      'logo' => '商标',
      'url' => '网址',
      'portalRoles' => '角色',
      'isActive' => '活跃',
      'isDefault' => '是默认值',
      'tabList' => '选项卡列表',
      'quickCreateList' => '快速创建列表',
      'companyLogo' => '商标',
      'theme' => '主题',
      'language' => '语言',
      'dashboardLayout' => '仪表板布局',
      'dateFormat' => '日期格式',
      'timeFormat' => '时间格式',
      'timeZone' => '时区',
      'weekStart' => '每周起始日',
      'defaultCurrency' => '默认货币',
      'layoutSet' => 'Layout Set',
      'authenticationProvider' => 'Authentication Provider',
      'customUrl' => '自定义网址',
      'customId' => '用户ID',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)'
    ],
    'links' => [
      'users' => '用户',
      'portalRoles' => '角色',
      'layoutSet' => 'Layout Set',
      'authenticationProvider' => 'Authentication Provider',
      'notes' => '笔记',
      'articles' => '知识库文章'
    ],
    'tooltips' => [
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones.',
      'portalRoles' => '指定的门户角色将应用于此门户的所有用户。'
    ],
    'labels' => [
      'Create Portal' => '创建门户',
      'User Interface' => '用户界面',
      'General' => '常规',
      'Settings' => '设置'
    ]
  ],
  'PortalRole' => [
    'fields' => [
      'exportPermission' => '导出权限',
      'massUpdatePermission' => 'Mass Update Permission',
      'data' => 'Data',
      'fieldData' => 'Field Data'
    ],
    'links' => [
      'users' => '用户'
    ],
    'labels' => [
      'Access' => '访问',
      'Create PortalRole' => '创建门户角色',
      'Scope Level' => '范围级别',
      'Field Level' => '现场级'
    ],
    'tooltips' => [
      'exportPermission' => '门户用户是否具有导出记录的权限'
    ]
  ],
  'PortalUser' => [
    'labels' => [
      'Create PortalUser' => '创建门户用户'
    ]
  ],
  'Preferences' => [
    'fields' => [
      'dateFormat' => '日期格式',
      'timeFormat' => '时间格式',
      'timeZone' => '时区',
      'weekStart' => '每周始于',
      'thousandSeparator' => '千位分隔符',
      'decimalMark' => '十进制标志',
      'defaultCurrency' => '默认货币',
      'currencyList' => '货币列表',
      'language' => '语言',
      'exportDelimiter' => '导出分隔符',
      'receiveAssignmentEmailNotifications' => '任务邮件提醒',
      'receiveMentionEmailNotifications' => '邮寄时提及的邮件提醒',
      'receiveStreamEmailNotifications' => '关于邮寄和更新状态的邮件提醒',
      'assignmentNotificationsIgnoreEntityTypeList' => 'In-app assignment notifications',
      'assignmentEmailNotificationsIgnoreEntityTypeList' => 'Email assignment notifications',
      'autoFollowEntityTypeList' => '全局自动跟随',
      'signature' => '邮件签名',
      'dashboardTabList' => '功能列表',
      'defaultReminders' => '默认提醒',
      'defaultRemindersTask' => 'Default Reminders for Tasks',
      'theme' => '主题',
      'useCustomTabList' => '启用自定义功能列表',
      'addCustomTabs' => 'Add Custom Tabs',
      'tabList' => '功能列表',
      'emailReplyToAllByDefault' => '此邮件签名默认用于所有回复邮件.',
      'dashboardLayout' => '仪表板布局',
      'dashboardLocked' => 'Lock Dashboard',
      'emailReplyForceHtml' => '超文本语言回复邮件',
      'doNotFillAssignedUserIfNotRequired' => '不要在创建记录时预先填充指定的用户',
      'followEntityOnStreamPost' => '在信息流发信息后自动跟踪记录',
      'followCreatedEntities' => '自动跟踪创建的记录',
      'followCreatedEntityTypeList' => '自动跟踪特定功能创建的记录',
      'emailUseExternalClient' => '使用外部邮件客户端',
      'textSearchStoringDisabled' => 'Disable text filter storing',
      'calendarSlotDuration' => 'Calendar Slot Duration',
      'calendarScrollHour' => 'Calendar Scroll to Hour',
      'smtpServer' => 'SMTP服务器',
      'smtpPort' => '端口',
      'smtpAuth' => '验证',
      'smtpSecurity' => '安全协议',
      'smtpUsername' => '用户名',
      'emailAddress' => '邮件',
      'smtpPassword' => '密码',
      'smtpEmailAddress' => '邮件地址',
      'scopeColorsDisabled' => '禁用颜色范围',
      'tabColorsDisabled' => '禁用功能菜单颜色'
    ],
    'links' => [],
    'options' => [
      'weekStart' => [
        0 => '星期日',
        1 => '星期一'
      ]
    ],
    'labels' => [
      'Notifications' => '通知',
      'User Interface' => '用户界面',
      'Misc' => '杂项',
      'Locale' => '语言环境',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default'
    ],
    'tooltips' => [
      'addCustomTabs' => 'If checked, custom tabs will be appended to default tabs. Otherwise, custom tabs will be used instead of default tabs.',
      'autoFollowEntityTypeList' => '自动跟随所选实体类型的所有新记录(由任何用户创建),能够在信息流中看到信息并接收关于系统中所有记录的通知。',
      'doNotFillAssignedUserIfNotRequired' => '当创建记录时，分配的用户不会被自己的用户填充，除非字段是必需的。',
      'followCreatedEntities' => '当创建新记录时，即使分配给另一个用户，它们也会自动跟随。',
      'followCreatedEntityTypeList' => '当创建选定实体类型的新记录时，即使将它们分配给另一个用户，它们也会自动跟随。'
    ],
    'tabFields' => [
      'label' => 'Label',
      'iconClass' => 'Icon',
      'color' => 'Color'
    ]
  ],
  'Role' => [
    'fields' => [
      'name' => '名称',
      'roles' => '角色',
      'assignmentPermission' => '分配许可',
      'userPermission' => '用户权限',
      'messagePermission' => 'Message Permission',
      'portalPermission' => '门户权限',
      'groupEmailAccountPermission' => '邮件组权限',
      'exportPermission' => '导出权限',
      'massUpdatePermission' => 'Mass Update Permission',
      'followerManagementPermission' => 'Follower Management Permission',
      'dataPrivacyPermission' => '数据隐私权限',
      'auditPermission' => 'Audit Permission',
      'mentionPermission' => 'Mention Permission',
      'data' => 'Data',
      'fieldData' => 'Field Data'
    ],
    'links' => [
      'users' => '用户',
      'teams' => '团队'
    ],
    'tooltips' => [
      'messagePermission' => 'Allows to send messages to other users.

* all – can send to all
* team – can send only to teammates
* no – cannot send',
      'assignmentPermission' => '允许限制将记录和消息分配给其他用户的能力。

所有的 - 没有限制
团队 - 只能分配和发信息给队友
否 - 只能分配和发信息给自己',
      'userPermission' => '允许以限制用户查看活动，日历和其他用户的数据流的能力。

所有 - 可以查看所有
团队 - 可以查看队友的活动只
否 - 无法查看',
      'portalPermission' => '对门户信息的访问，可以向门户用户发送消息。',
      'groupEmailAccountPermission' => '对组邮件帐户的访问，从组邮件SMTP发送邮件的能力。',
      'exportPermission' => '用户是否具有导出记录的能力。',
      'massUpdatePermission' => 'The ability to perform mass update of records.',
      'followerManagementPermission' => 'Allows to manage followers of specific records.',
      'dataPrivacyPermission' => '允许查看和删除个人数据。',
      'auditPermission' => 'Allows to view the audit log.',
      'mentionPermission' => 'Allows to mention other users in the Stream.

* all – can mention all
* team – can mention only teammates
* no – cannot mention'
    ],
    'labels' => [
      'Access' => '访问',
      'Create Role' => '创建角色',
      'Scope Level' => '范围级别',
      'Field Level' => '场级'
    ],
    'options' => [
      'accessList' => [
        'not-set' => '未设置',
        'enabled' => '启用',
        'disabled' => '禁用'
      ],
      'levelList' => [
        'all' => '全部',
        'team' => '团队',
        'account' => '客户',
        'contact' => '联系',
        'own' => '所有者',
        'no' => '没有',
        'yes' => '是',
        'not-set' => '未设置'
      ]
    ],
    'actions' => [
      'read' => '读取',
      'edit' => '编辑',
      'delete' => '删除',
      'stream' => '信息流',
      'create' => '创建'
    ],
    'messages' => [
      'changesAfterClearCache' => '访问控制中的所有更改将在缓存清除后应用。'
    ]
  ],
  'ScheduledJob' => [
    'fields' => [
      'name' => '名称',
      'status' => '状态',
      'job' => '工作',
      'scheduling' => '计划'
    ],
    'links' => [
      'log' => '日志'
    ],
    'labels' => [
      'As often as possible' => 'As often as possible',
      'Create ScheduledJob' => '创建计划作业'
    ],
    'options' => [
      'job' => [
        'Cleanup' => '清理',
        'CheckInboundEmails' => '检查组电子邮件帐户',
        'CheckEmailAccounts' => '检查个人电子邮件帐户',
        'SendEmailReminders' => '发送电子邮件提醒',
        'AuthTokenControl' => '授权令牌控制',
        'SendEmailNotifications' => '发送邮件通知',
        'CheckNewVersion' => '检查新版本',
        'ProcessWebhookQueue' => 'Process Webhook Queue',
        'ProcessMassEmail' => '发送大量电子邮件',
        'ControlKnowledgeBaseArticleStatus' => '控制知识库文章状态'
      ],
      'cronSetup' => [
        'linux' => '注意：将此行添加到crontab文件以运行Espo计划作业：',
        'mac' => '注意：将此行添加到crontab文件以运行Espo计划作业：',
        'windows' => '注意：使用以下命令创建批处理文件以使用Windows计划任务运行Espo计划作业：',
        'default' => '注意：将此命令添加到Cron Job（计划任务）：'
      ],
      'status' => [
        'Active' => '激活',
        'Inactive' => '未激活'
      ]
    ],
    'tooltips' => [
      'scheduling' => 'Crontab notation. Defines frequency of job runs.

`*/5 * * * *` - every 5 minutes

`0 */2 * * *` - every 2 hours

`30 1 * * *` - at 01:30 once a day

`0 0 1 * *` - on the first day of the month'
    ]
  ],
  'ScheduledJobLogRecord' => [
    'fields' => [
      'status' => '状态',
      'executionTime' => '执行时间',
      'target' => '目标'
    ]
  ],
  'Settings' => [
    'fields' => [
      'useCache' => '使用缓存',
      'dateFormat' => '日期格式',
      'timeFormat' => '时间格式',
      'timeZone' => '时区',
      'weekStart' => '每周始于',
      'thousandSeparator' => '千位分隔符',
      'decimalMark' => '十进制标志',
      'defaultCurrency' => '默认货币',
      'baseCurrency' => '基本货币',
      'currencyRates' => '速率值',
      'currencyList' => '货币列表',
      'language' => '语言',
      'companyLogo' => '公司LOGO',
      'smsProvider' => 'SMS Provider',
      'outboundSmsFromNumber' => 'SMS From Number',
      'smtpServer' => 'SMTP服务器',
      'smtpPort' => '端口',
      'smtpAuth' => '验证',
      'smtpSecurity' => '安全协议',
      'smtpUsername' => '用户名',
      'emailAddress' => '电子邮件',
      'smtpPassword' => '密码',
      'outboundEmailFromName' => '发件人',
      'outboundEmailFromAddress' => '发件人地址',
      'outboundEmailIsShared' => '是否共享',
      'emailAddressLookupEntityTypeList' => 'Email address look-up scopes',
      'emailAddressSelectEntityTypeList' => 'Email address select scopes',
      'recordsPerPage' => '每页记录',
      'recordsPerPageSmall' => '每页记录（小）',
      'recordsPerPageSelect' => 'Records Per Page (Select)',
      'recordsPerPageKanban' => 'Records Per Page (Kanban)',
      'tabList' => '功能列表',
      'quickCreateList' => '快速创建列表',
      'exportDelimiter' => '导出分隔符',
      'globalSearchEntityList' => '全局搜索功能列表',
      'authenticationMethod' => '验证方法',
      'ldapHost' => '主机',
      'ldapPort' => '端口',
      'ldapAuth' => '验证',
      'ldapUsername' => '完整用户DN',
      'ldapPassword' => '密码',
      'ldapBindRequiresDn' => '绑定需要域名',
      'ldapBaseDn' => '基本DN',
      'ldapAccountCanonicalForm' => '帐户规范表格',
      'ldapAccountDomainName' => '帐户域名',
      'ldapTryUsernameSplit' => '尝试拆分用户名',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => '在EspoCRM中创建用户',
      'ldapSecurity' => '安全协议',
      'ldapUserLoginFilter' => '用户登录过滤器',
      'ldapAccountDomainNameShort' => '帐户短域名',
      'ldapOptReferrals' => '选择推荐',
      'ldapUserNameAttribute' => '用户名属性',
      'ldapUserObjectClass' => '用户对象类',
      'ldapUserTitleAttribute' => '用户标题属性',
      'ldapUserFirstNameAttribute' => '用户名字属性',
      'ldapUserLastNameAttribute' => '用户姓名属性',
      'ldapUserEmailAddressAttribute' => '用户邮箱地址属性',
      'ldapUserTeams' => '用户团队',
      'ldapUserDefaultTeam' => '用户默认团队',
      'ldapUserPhoneNumberAttribute' => '用户手机号码属性',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => '禁用导出（仅允许管理员）',
      'assignmentNotificationsEntityList' => '发送通知功能列表',
      'assignmentEmailNotifications' => '任务分配提醒',
      'assignmentEmailNotificationsEntityList' => '分配邮件提醒范围',
      'streamEmailNotifications' => '信息流中的内部用户更新提醒',
      'portalStreamEmailNotifications' => '信息流中的门户用户更新提醒',
      'streamEmailNotificationsEntityList' => '邮件通知信息流范围',
      'streamEmailNotificationsTypeList' => '通知',
      'emailNotificationsDelay' => 'Delay of email notifications (in seconds)',
      'b2cMode' => 'B2C模式',
      'avatarsDisabled' => '禁用头像',
      'followCreatedEntities' => '跟踪创建的记录',
      'displayListViewRecordCount' => '显示总计数（在列表视图上）',
      'theme' => '主题',
      'userThemesDisabled' => '禁用用户主题',
      'attachmentUploadMaxSize' => 'Upload Max Size (Mb)',
      'attachmentUploadChunkSize' => 'Upload Chunk Size (Mb)',
      'emailMessageMaxSize' => '电子邮件最大大小（Mb）',
      'massEmailMaxPerHourCount' => '每小时发送的电子邮件的最大计数',
      'massEmailMaxPerBatchCount' => 'Max number of emails sent per batch',
      'personalEmailMaxPortionSize' => '个人帐户提取的最大电子邮件部分大小',
      'inboundEmailMaxPortionSize' => '群组帐户提取的最大电子邮件部分大小',
      'maxEmailAccountCount' => '每个用户的个人电子邮件帐户的最大计数',
      'authTokenLifetime' => '验证Token存活时间（小时）',
      'authTokenMaxIdleTime' => '验证Token最大空闲等待时间（小时）',
      'dashboardLayout' => '仪表板的布局(默认)',
      'siteUrl' => '站点地址',
      'addressPreview' => '地址预览',
      'addressFormat' => '地址格式',
      'personNameFormat' => 'Person Name Format',
      'notificationSoundsDisabled' => '禁用通知声音',
      'newNotificationCountInTitle' => 'Display new notification number in page title',
      'applicationName' => '应用名称',
      'calendarEntityList' => '日历功能列表',
      'busyRangesEntityList' => 'Free/Busy Entity List',
      'mentionEmailNotifications' => '文章@邮件通知',
      'massEmailDisableMandatoryOptOutLink' => '禁用强制选择退出链接',
      'massEmailOpenTracking' => 'Email Open Tracking',
      'massEmailVerp' => 'Use VERP',
      'activitiesEntityList' => '活动功能列表',
      'historyEntityList' => '历史功能列表',
      'currencyFormat' => '货币格式',
      'currencyDecimalPlaces' => '货币小数位',
      'aclAllowDeleteCreated' => '允许删除创建的记录',
      'adminNotifications' => '管理面板中的系统通知',
      'adminNotificationsNewVersion' => '当新的EspoCRM版本可用时显示通知',
      'adminNotificationsNewExtensionVersion' => '扩展有新版本可用时通知',
      'textFilterUseContainsForVarchar' => '在过滤varchar字段时使用“contains”操作符.',
      'phoneNumberNumericSearch' => 'Numeric phone number search',
      'phoneNumberInternational' => 'International phone numbers',
      'phoneNumberExtensions' => 'Phone number extensions',
      'phoneNumberPreferredCountryList' => 'Preferred telephone country codes',
      'authTokenPreventConcurrent' => '每个用户只有一个认证令牌',
      'scopeColorsDisabled' => '禁用颜色范围',
      'tabColorsDisabled' => '禁用功能菜单颜色',
      'tabIconsDisabled' => '禁用标签图标',
      'emailAddressIsOptedOutByDefault' => 'Mark new email addresses as opted-out',
      'outboundEmailBccAddress' => '外部BCC地址',
      'cleanupDeletedRecords' => '清理已删除的记录',
      'addressCityList' => 'Address City Autocomplete List',
      'addressStateList' => 'Address State Autocomplete List',
      'fiscalYearShift' => 'Fiscal Year Start',
      'jobRunInParallel' => 'Jobs Run in Parallel',
      'jobMaxPortion' => 'Jobs Max Portion',
      'jobPoolConcurrencyNumber' => 'Jobs Pool Concurrency Number',
      'jobForceUtc' => 'Force UTC Time Zone',
      'daemonInterval' => 'Daemon Interval',
      'daemonMaxProcessNumber' => 'Daemon Max Process Number',
      'daemonProcessTimeout' => 'Daemon Process Timeout',
      'cronDisabled' => 'Disable Cron',
      'maintenanceMode' => 'Maintenance Mode',
      'useWebSocket' => 'Use WebSocket',
      'passwordRecoveryDisabled' => 'Disable password recovery',
      'passwordRecoveryForAdminDisabled' => 'Disable password recovery for admin users',
      'passwordRecoveryForInternalUsersDisabled' => 'Disable password recovery for internal users',
      'passwordRecoveryNoExposure' => 'Prevent email address exposure on password recovery form',
      'passwordGenerateLength' => 'Length of generated passwords',
      'passwordStrengthLength' => 'Minimum password length',
      'passwordStrengthLetterCount' => 'Number of letters required in password',
      'passwordStrengthNumberCount' => 'Number of digits required in password',
      'passwordStrengthBothCases' => 'Password must contain letters of both upper and lower case',
      'auth2FA' => 'Enable 2-Factor Authentication',
      'auth2FAForced' => 'Force regular users to set up 2FA',
      'auth2FAMethodList' => 'Available 2FA methods',
      'auth2FAInPortal' => 'Allow 2FA in portals',
      'workingTimeCalendar' => 'Working Time Calendar',
      'oidcClientId' => 'OIDC Client ID',
      'oidcClientSecret' => 'OIDC Client Secret',
      'oidcAuthorizationRedirectUri' => 'OIDC Authorization Redirect URI',
      'oidcAuthorizationEndpoint' => 'OIDC Authorization Endpoint',
      'oidcTokenEndpoint' => 'OIDC Token Endpoint',
      'oidcJwksEndpoint' => 'OIDC JSON Web Key Set Endpoint',
      'oidcJwtSignatureAlgorithmList' => 'OIDC JWT Allowed Signature Algorithms',
      'oidcScopes' => 'OIDC Scopes',
      'oidcGroupClaim' => 'OIDC Group Claim',
      'oidcCreateUser' => 'OIDC Create User',
      'oidcUsernameClaim' => 'OIDC Username Claim',
      'oidcTeams' => 'OIDC Teams',
      'oidcSync' => 'OIDC Sync',
      'oidcSyncTeams' => 'OIDC Sync Teams',
      'oidcFallback' => 'OIDC Fallback Login',
      'oidcAllowRegularUserFallback' => 'OIDC Allow fallback login for regular users',
      'oidcAllowAdminUser' => 'OIDC Allow OIDC login for admin users',
      'oidcLogoutUrl' => 'OIDC Logout URL',
      'oidcAuthorizationPrompt' => 'OIDC Authorization Prompt',
      'pdfEngine' => 'PDF Engine',
      'quickSearchFullTextAppendWildcard' => 'Append wildcard in quick search',
      'authIpAddressCheck' => 'Restrict access by IP address',
      'authIpAddressWhitelist' => 'IP Address Whitelist',
      'authIpAddressCheckExcludedUsers' => 'Users excluded from check'
    ],
    'options' => [
      'authenticationMethod' => [
        'Oidc' => 'OIDC'
      ],
      'currencyFormat' => [
        1 => '10 USD',
        2 => '$10',
        3 => '10 $'
      ],
      'personNameFormat' => [
        'firstLast' => 'First Last',
        'lastFirst' => 'Last First',
        'firstMiddleLast' => 'First Middle Last',
        'lastFirstMiddle' => 'Last First Middle'
      ],
      'streamEmailNotificationsTypeList' => [
        'Post' => '收到消息',
        'Status' => '状态更新',
        'EmailReceived' => '收到邮件'
      ],
      'auth2FAMethodList' => [
        'Totp' => 'TOTP',
        'Email' => 'Email',
        'Sms' => 'SMS'
      ]
    ],
    'tooltips' => [
      'authIpAddressCheckExcludedUsers' => 'Users that will be able to log in regardless whether their IP address is in the whitelist.',
      'authIpAddressWhitelist' => 'A list of IP addresses or ranges in CIDR notation.

Portals are not affected by restriction.',
      'workingTimeCalendar' => 'A working time calendar that will be applied to all users by default.',
      'displayListViewRecordCount' => 'A total number of records will be shown on the list view.',
      'currencyList' => 'What currencies will be available in the system.',
      'activitiesEntityList' => 'What records will be available in the Activities panel.',
      'historyEntityList' => 'What records will be available in the History panel.',
      'calendarEntityList' => 'What records will be available in the Calendar.',
      'addressStateList' => 'State suggestions for address fields.',
      'addressCityList' => 'City suggestions for address fields.',
      'addressCountryList' => 'Country suggestions for address fields.',
      'exportDisabled' => 'Users won\'t be able to export records. Only admin will be allowed.',
      'globalSearchEntityList' => 'What records can be searched with Global Search.',
      'siteUrl' => 'A URL of this EspoCRM instance. You need to change it if you move to another domain.',
      'useCache' => 'Not recommended to disable, unless for development purpose.',
      'useWebSocket' => 'WebSocket enables two-way interactive communication between a server and a browser. Requires setting up the WebSocket daemon on your server. Check the documentation for more info.',
      'passwordRecoveryForInternalUsersDisabled' => 'Only portal users will be able to recover password.',
      'passwordRecoveryNoExposure' => 'It won\'t be possible to determine whether a specific email address is registered in the system.',
      'emailAddressLookupEntityTypeList' => 'For email address autocomplete.',
      'emailAddressSelectEntityTypeList' => 'Entity types available when searching for an email address from a modal.',
      'emailNotificationsDelay' => 'A message can be edited within the specified timeframe before the notification is sent.',
      'outboundEmailFromAddress' => 'The system email address.',
      'smtpServer' => 'If empty, then Group Email Account with the corresponding email address will be used.',
      'busyRangesEntityList' => 'What will be taken into account when showing busy time ranges in scheduler & timeline.',
      'massEmailVerp' => 'Variable envelope return path. For better handling of bounced messages. Make sure that your SMTP provider supports it.',
      'recordsPerPage' => '列表视图中最初显示的记录数。',
      'recordsPerPageSmall' => '最初在关系面板中显示的记录数。',
      'recordsPerPageSelect' => 'Number of records initially displayed when selecting records.',
      'recordsPerPageKanban' => 'Number of records initially displayed in kanban columns.',
      'outboundEmailIsShared' => '允许用户使用此地址发送邮件。',
      'followCreatedEntities' => '用户将自动跟随他们创建的记录。',
      'emailMessageMaxSize' => '所有超过指定大小的入站电子邮件都将获取w / o正文和附件。',
      'authTokenLifetime' => '令牌可以存在多长时间. 
0  - 表示永不过期。',
      'authTokenMaxIdleTime' => '最后一次访问令牌可以存活多久.
0 -表示永不过期。',
      'userThemesDisabled' => '如果选中，用户将无法选择其他主题。',
      'ldapUsername' => '全系统DN用户允许搜索其他用户。例如: "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan"。',
      'ldapPassword' => '访问LDAP服务器的密码。',
      'ldapAuth' => '访问LDAP的凭证。',
      'ldapUserNameAttribute' => '识别用户的属性。
E.g. "用户主要名字" or "sAM账户名" 对于活动目录, "uid" for OpenLDAP.',
      'ldapUserObjectClass' => '搜索用户的对象类属性。例如 "人" for AD, "inetOrgPerson" for OpenLDAP.',
      'ldapAccountCanonicalForm' => 'The type of your account canonical form. There are 4 options:

- \'Dn\' - the form in the format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.

- \'Username\' - the form \'tester\'.

- \'Backslash\' - the form \'COMPANY\\tester\'.

- \'Principal\' - the form \'tester@company.com\'.',
      'ldapBindRequiresDn' => '此项用于格式化DN中的用户名。',
      'ldapBaseDn' => '默认的基本DN用于搜索用户,例如: "OU=用户,OU=espocrm,DC=测试, DC=lan".',
      'ldapTryUsernameSplit' => '此选项用于从域中剥离用户名。',
      'ldapOptReferrals' => '如果 参考应遵循LDAP客户端。',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => '此选项允许EspoCRM创建一个来自LDAP的用户。',
      'ldapUserFirstNameAttribute' => '轻量级目录访问协议属性用来确定用户的姓.例如: "名字".',
      'ldapUserLastNameAttribute' => '轻量级目录访问协议属性用来确定用户的名.例如: " 序列号".',
      'ldapUserTitleAttribute' => '轻量级目录访问协议属性用来确定用户标题.例如: "标题".',
      'ldapUserEmailAddressAttribute' => '轻量级目录访问协议属性用来确定用户的电子邮件地址。例如: "邮件".',
      'ldapUserPhoneNumberAttribute' => '轻量级目录访问协议属性用来确定用户的手机号码。例如: "手机号码".',
      'ldapUserLoginFilter' => '筛选器可以禁止使用的EspoCRM用户操作 例如: "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => '用于 LDAP 服务器身份验证的域。',
      'ldapAccountDomainNameShort' => '用于 LDAP 服务器身份验证的短域。',
      'ldapUserTeams' => '已创建用户的团队。更多信息，请查看用户资料。',
      'ldapUserDefaultTeam' => '建用户的默认团队。更多信息，请查看用户资料。',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => '默认情况下，EspoCRM使用B2B模式,您可以将其切换到B2C模式。',
      'currencyDecimalPlaces' => '小数位数。如果留空，所有非空的小数位都将显示。',
      'aclStrictMode' => '启用: 如果在角色中没有指定作用范围，则禁止访问未指定的范围。

禁用: 如果在角色中没有指定作用范围，则允许访问未指定的范围。',
      'aclAllowDeleteCreated' => '用户将能够删除他们创建的记录，即使他们没有删除访问权限。',
      'textFilterUseContainsForVarchar' => '如果没有勾选，则使用“start with”操作符,您可以使用通配符“%”。',
      'streamEmailNotificationsEntityList' => '关于跟踪记录的流更新的电子邮件通知。用户只会收到指定实体类型的电子邮件通知。',
      'authTokenPreventConcurrent' => '用户不能同时在多个设备上登录。',
      'emailAddressIsOptedOutByDefault' => 'When creating new record email address will be marked as opted-out.',
      'cleanupDeletedRecords' => '删除的记录将在一段时间后从数据库中删除。',
      'jobRunInParallel' => 'Jobs will be executed in parallel processes.',
      'jobPoolConcurrencyNumber' => 'Max number of processes run simultaneously.',
      'jobMaxPortion' => 'Max number of jobs processed per one execution.',
      'jobForceUtc' => 'Use the UTC time zone for scheduled jobs. Otherwise, the time zone set in settings will be used.',
      'daemonInterval' => 'Interval between process cron runs in seconds.',
      'daemonMaxProcessNumber' => 'Max number of cron processes run simultaneously.',
      'daemonProcessTimeout' => 'Max execution time (in seconds) allocated for a single cron process.',
      'cronDisabled' => 'Cron will not run.',
      'maintenanceMode' => 'Only administrators will have access to the system.',
      'oidcGroupClaim' => 'A claim to use for team mapping.',
      'oidcFallback' => 'Allow login by username/password.',
      'oidcCreateUser' => 'Create a new user in Espo when no matching user found.',
      'oidcSync' => 'Sync user data (on every login).',
      'oidcSyncTeams' => 'Sync user teams (on every login).',
      'oidcUsernameClaim' => 'A claim to use for a username (for user matching and creation).',
      'oidcTeams' => 'Espo teams mapped against groups/teams/roles of the identity provider. Teams with an empty mapping value will be always assigned to a user (when creating or syncing).',
      'oidcLogoutUrl' => 'An URL the browser will redirect to after logging out from Espo. Intended for clearing the session information in the browser and doing logging out on the provider side. Usually the URL contains a redirect-URL parameter, to return back to Espo.

Available placeholders:
* `{siteUrl}`
* `{clientId}`',
      'quickSearchFullTextAppendWildcard' => 'Append a wildcard to an autocomplete search query when Full-Text search is enabled. Reduces search performance.'
    ],
    'labels' => [
      'Group Tab' => 'Group Tab',
      'Divider' => 'Divider',
      'System' => '系统',
      'Locale' => '语言环境',
      'Search' => 'Search',
      'Misc' => 'Misc',
      'SMTP' => 'SMTP',
      'General' => 'General',
      'Phone Numbers' => 'Phone Numbers',
      'Navbar' => 'Navbar',
      'Dashboard' => 'Dashboard',
      'Configuration' => '配置',
      'In-app Notifications' => '应用内通知',
      'Email Notifications' => '电子邮件通知',
      'Currency Settings' => '货币设置',
      'Currency Rates' => '货币汇率',
      'Mass Email' => '群发邮件',
      'Test Connection' => '测试连接',
      'Connecting' => '连接中...',
      'Activities' => '活动',
      'Admin Notifications' => '管理通知',
      'Passwords' => 'Passwords',
      '2-Factor Authentication' => '2-Factor Authentication',
      'Attachments' => 'Attachments',
      'IdP Group' => 'IdP Group',
      'Access' => 'Access',
      'Strength' => 'Strength',
      'Recovery' => 'Recovery'
    ],
    'messages' => [
      'ldapTestConnection' => '连接已成功建立。'
    ]
  ],
  'Stream' => [
    'messages' => [
      'infoMention' => 'Type **@username** to mention user in the post.',
      'infoSyntax' => 'Available markdown syntax',
      'couldNotAddFollowerUserHasNoAccessToStream' => 'Could not add the user \'{userName}\' to the followers. The user does not have \'stream\' access to the record.'
    ],
    'syntaxItems' => [
      'code' => 'code',
      'multilineCode' => 'multiline code',
      'strongText' => 'strong text',
      'emphasizedText' => 'emphasized text',
      'deletedText' => 'deleted text',
      'blockquote' => 'blockquote',
      'link' => 'link'
    ]
  ],
  'Team' => [
    'fields' => [
      'name' => '名称',
      'roles' => '角色',
      'layoutSet' => 'Layout Set',
      'workingTimeCalendar' => 'Working Time Calendar',
      'positionList' => '位置列表',
      'userRole' => 'User Role'
    ],
    'links' => [
      'users' => '用户',
      'notes' => '笔记',
      'roles' => '角色',
      'layoutSet' => 'Layout Set',
      'workingTimeCalendar' => 'Working Time Calendar',
      'inboundEmails' => '组电子邮件帐户',
      'groupEmailFolders' => 'Group Email Folders'
    ],
    'tooltips' => [
      'workingTimeCalendar' => 'A calendar will be applied to users who have this team set as a Default Team.',
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones. Layout Set will be applied to users who have this team set as Default Team.',
      'roles' => '访问角色。此团队的用户从选定的角色获取访问控制级别。',
      'positionList' => '在这个团队中可用的位置。例如。销售员，经理。'
    ],
    'labels' => [
      'Create Team' => '创建团队'
    ]
  ],
  'Template' => [
    'fields' => [
      'name' => '名称',
      'body' => '正文',
      'entityType' => '功能类型',
      'header' => '标题',
      'footer' => '页脚',
      'leftMargin' => '左边距',
      'topMargin' => '上边距',
      'rightMargin' => '右边距',
      'bottomMargin' => '下边距',
      'printFooter' => '打印页脚',
      'printHeader' => 'Print Header',
      'footerPosition' => '页脚位置',
      'headerPosition' => 'Header Position',
      'variables' => '可用占位符',
      'pageOrientation' => '页面方向',
      'pageFormat' => '页面格式',
      'pageWidth' => 'Page Width (mm)',
      'pageHeight' => 'Page Height (mm)',
      'fontFace' => '字体',
      'title' => 'Title',
      'style' => 'Style'
    ],
    'links' => [],
    'labels' => [
      'Create Template' => '创建模板'
    ],
    'options' => [
      'pageOrientation' => [
        'Portrait' => '人物',
        'Landscape' => '风景'
      ],
      'pageFormat' => [
        'Custom' => 'Custom'
      ],
      'placeholders' => [
        'pagebreak' => 'Page break',
        'today' => '今天（日期）',
        'now' => '现在（日期时间）'
      ],
      'fontFace' => []
    ],
    'tooltips' => [
      'footer' => '使用{pageNumber}打印页码。',
      'variables' => '复制粘贴所需的占位符到标题，正文或页脚。'
    ]
  ],
  'User' => [
    'fields' => [
      'name' => '名称',
      'userName' => '用户名',
      'title' => '标题',
      'type' => 'Type',
      'isAdmin' => '管理员',
      'defaultTeam' => '默认团队',
      'emailAddress' => '电子邮件',
      'phoneNumber' => '电话',
      'roles' => '角色',
      'portals' => '门户',
      'portalRoles' => '门户角色',
      'teamRole' => '位置',
      'password' => '密码',
      'currentPassword' => '当前密码',
      'passwordConfirm' => '确认密码',
      'newPassword' => '新密码',
      'newPasswordConfirm' => '确认新密码',
      'yourPassword' => 'Your current password',
      'avatar' => '头像',
      'avatarColor' => 'Avatar Color',
      'isActive' => '活跃',
      'isPortalUser' => '门户用户',
      'contact' => '联系人',
      'accounts' => '客户',
      'account' => '帐户（主要）',
      'sendAccessInfo' => '通过邮件向用户发送访问信息.',
      'portal' => '门户网站',
      'gender' => '性别',
      'position' => '在队中的位置',
      'ipAddress' => 'IP地址',
      'passwordPreview' => '密码预览',
      'isSuperAdmin' => '超级管理员',
      'lastAccess' => '最后访问',
      'apiKey' => 'API Key',
      'secretKey' => 'Secret Key',
      'dashboardTemplate' => 'Dashboard Template',
      'workingTimeCalendar' => 'Working Time Calendar',
      'auth2FA' => '2FA',
      'authMethod' => 'Authentication Method',
      'auth2FAEnable' => 'Enable 2-Factor Authentication',
      'auth2FAMethod' => '2FA Method',
      'auth2FATotpSecret' => '2FA TOTP Secret',
      'layoutSet' => 'Layout Set',
      'acceptanceStatus' => '验收状态',
      'acceptanceStatusMeetings' => '接受状态(Meetings)',
      'acceptanceStatusCalls' => '接受状态(Calls)'
    ],
    'links' => [
      'defaultTeam' => 'Default Team',
      'teams' => '团队',
      'roles' => '角色',
      'notes' => '笔记',
      'portals' => '门户',
      'portalRoles' => '门户角色',
      'contact' => '联系人',
      'accounts' => '客户',
      'account' => '帐户（主要）',
      'tasks' => '任务',
      'userData' => 'User Data',
      'dashboardTemplate' => 'Dashboard Template',
      'workingTimeCalendar' => 'Working Time Calendar',
      'workingTimeRanges' => 'Working Time Exceptions',
      'layoutSet' => 'Layout Set',
      'targetLists' => '目标列表'
    ],
    'labels' => [
      'Create User' => '创建用户',
      'Generate' => '生成',
      'Access' => '访问',
      'Preferences' => '优先',
      'Change Password' => '更改密码',
      'Teams and Access Control' => '团队和访问控制',
      'Forgot Password?' => '忘记密码？',
      'Password Change Request' => '密码更改请求',
      'Email Address' => '电子邮件地址',
      'External Accounts' => '外部帐户',
      'Email Accounts' => '电子邮件帐户',
      'Portal' => '门户',
      'Create Portal User' => '创建门户用户',
      'Proceed w/o Contact' => '继续创建联系人',
      'Generate New API Key' => 'Generate New API Key',
      'Generate New Password' => 'Generate New Password',
      'Send Password Change Link' => 'Send Password Change Link',
      'Back to login form' => 'Back to login form',
      'Requirements' => 'Requirements',
      'Security' => 'Security',
      'Reset 2FA' => 'Reset 2FA',
      'Code' => 'Code',
      'Secret' => 'Secret',
      'Send Code' => 'Send Code',
      'Login Link' => 'Login Link'
    ],
    'tooltips' => [
      'defaultTeam' => '默认情况下，此用户创建的所有记录都将与此小组相关。',
      'userName' => '允许使用字符: a-z，0-9，.，-，@, _',
      'isAdmin' => '管理员拥有最大权限.',
      'isActive' => '如果取消选中则用户将无法登录。',
      'teams' => '该用户所属的团队。访问控制级别从团队角色继承。',
      'roles' => '其他访问角色。如果用户不属于任何团队，或者需要为此用户专门扩展访问控制级别，请使用此角色。',
      'portalRoles' => '其他门户网站角色。使用它来为此用户专门扩展访问控制级别。',
      'portals' => '此用户有权访问的门户。',
      'layoutSet' => 'Layouts from a specified set will be applied for the user instead of default ones.'
    ],
    'messages' => [
      '2faMethodNotConfigured' => 'The 2FA method is not fully configured in the system.',
      'loginAs' => 'Open the login link in an incognito window to preserve your current session. Use your admin credentials to log in.',
      'sendPasswordChangeLinkConfirmation' => 'An email with a unique link will be sent to the user allowing them to change their password. The link will expire after a specific amount of time.',
      'passwordRecoverySentIfMatched' => 'Assuming the entered data matched any user account.',
      'passwordStrengthLength' => 'Must be at least {length} characters long.',
      'passwordStrengthLetterCount' => 'Must contain at least {count} letter(s).',
      'passwordStrengthNumberCount' => 'Must contain at least {count} digit(s).',
      'passwordStrengthBothCases' => 'Must contain letters of both upper and lower case.',
      'passwordWillBeSent' => '密码将发送到用户的电子邮件地址。',
      'passwordChanged' => '密码已被更改',
      'userCantBeEmpty' => '用户名不能为空',
      'wrongUsernamePassword' => '用户名/密码错误',
      'failedToLogIn' => 'Failed to log in',
      'emailAddressCantBeEmpty' => '电子邮件地址不能为空',
      'userNameEmailAddressNotFound' => '用户名/电子邮件地址未找到',
      'forbidden' => '禁止访问，请稍后再试',
      'uniqueLinkHasBeenSent' => '唯一网址已发送到指定的电子邮件地址。',
      'passwordChangedByRequest' => '密码已被更改。',
      'setupSmtpBefore' => 'You need to setup [SMTP settings]({url}) to make the system be able to send password in email.',
      'userNameExists' => '用户名已经存在',
      'loginError' => 'Error occurred',
      'wrongCode' => 'Wrong code',
      'codeIsRequired' => 'Code is required',
      'yourAuthenticationCode' => 'Your authentication code: {code}.',
      'choose2FaSmsPhoneNumber' => 'Select a phone number that will be used for 2FA.',
      'choose2FaEmailAddress' => 'Select an email address that will be used for 2FA. It\'s highly recommended to use a non-primary email address.',
      'enterCodeSentInEmail' => 'Enter the code sent to your email address.',
      'enterCodeSentBySms' => 'Enter the code sent by SMS to your phone number.',
      'enterTotpCode' => 'Enter a code from your authenticator app.',
      'verifyTotpCode' => 'Scan the QR-code with your mobile authenticator app. If you have a trouble with scanning, you can enter the secret manually. After that you will see a 6-digit code in your application. Enter this code in the field below.',
      'generateAndSendNewPassword' => 'A new password will be generated and sent to the user\'s email address.',
      'security2FaResetConfirmation' => 'Are you sure you want to reset the current 2FA settings?',
      'auth2FARequiredHeader' => '2 factor authentication required',
      'auth2FARequired' => 'You need to set up 2 factor authentication. Use an authenticator application on your mobile phone (e.g. Google Authenticator).',
      'ldapUserInEspoNotFound' => 'User is not found in EspoCRM. Contact your administrator to create the user.',
      'passwordChangeRequestNotFound' => 'The password change request is not found. It might be expired. Try to initiate a new password recovery from the [login page]({url}).',
      'defaultTeamIsNotUsers' => 'Default Team should be one of user\'s Teams'
    ],
    'options' => [
      'gender' => [
        '' => '未设置',
        'Male' => '男士',
        'Female' => '女士',
        'Neutral' => '中立的'
      ],
      'type' => [
        'regular' => 'Regular',
        'admin' => 'Admin',
        'portal' => 'Portal',
        'system' => 'System',
        'super-admin' => 'Super-Admin',
        'api' => 'API'
      ],
      'authMethod' => [
        'ApiKey' => 'API Key',
        'Hmac' => 'HMAC'
      ]
    ],
    'boolFilters' => [
      'onlyMyTeam' => '只有我的团队',
      'onlyMe' => 'OnlyMe'
    ],
    'presetFilters' => [
      'active' => '激活',
      'activePortal' => '门户活动',
      'activeApi' => 'API Active'
    ],
    'actions' => [
      'changePosition' => 'Change Position'
    ]
  ],
  'Webhook' => [
    'labels' => [
      'Create Webhook' => 'Create Webhook'
    ],
    'fields' => [
      'event' => 'Event',
      'url' => 'URL',
      'isActive' => 'Is Active',
      'user' => 'API User',
      'entityType' => 'Entity Type',
      'field' => 'Field',
      'secretKey' => 'Secret Key'
    ],
    'links' => [
      'user' => 'User'
    ]
  ],
  'WebhookQueueItem' => [
    'fields' => [
      'event' => 'Event',
      'webhook' => 'Webhook',
      'target' => 'Target',
      'data' => 'Data',
      'status' => 'Status',
      'processedAt' => 'Processed At',
      'attempts' => 'Attempts',
      'processAt' => 'Process At'
    ],
    'links' => [
      'webhook' => 'Webhook'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pending',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ]
  ],
  'WorkingTimeCalendar' => [
    'labels' => [
      'Create WorkingTimeCalendar' => 'Create Calendar'
    ],
    'fields' => [
      'timeZone' => 'Time Zone',
      'timeRanges' => 'Workday Schedule',
      'weekday0' => 'Sun',
      'weekday1' => 'Mon',
      'weekday2' => 'Tue',
      'weekday3' => 'Wed',
      'weekday4' => 'Thu',
      'weekday5' => 'Fri',
      'weekday6' => 'Sat',
      'weekday0TimeRanges' => 'Sun Schedule',
      'weekday1TimeRanges' => 'Mon Schedule',
      'weekday2TimeRanges' => 'Tue Schedule',
      'weekday3TimeRanges' => 'Wed Schedule',
      'weekday4TimeRanges' => 'Thu Schedule',
      'weekday5TimeRanges' => 'Fri Schedule',
      'weekday6TimeRanges' => 'Sat Schedule'
    ],
    'links' => [
      'ranges' => 'Exceptions'
    ]
  ],
  'WorkingTimeRange' => [
    'labels' => [
      'Create WorkingTimeRange' => 'Create Exception',
      'Calendars' => 'Calendars'
    ],
    'fields' => [
      'timeRanges' => 'Schedule',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date End',
      'type' => 'Type',
      'calendars' => 'Calendars',
      'users' => 'Users'
    ],
    'links' => [
      'calendars' => 'Calendars',
      'users' => 'Users'
    ],
    'options' => [
      'type' => [
        'Non-working' => 'Non-working',
        'Working' => 'Working'
      ]
    ],
    'presetFilters' => [
      'actual' => 'Actual'
    ],
    'tooltips' => [
      'calendars' => 'Calendars to apply the exception to. The exception will be applied to all users of selected calendars.

Leave the field empty if you need to apply the exception only for specific users.',
      'users' => 'Specific users to apply the exception to.'
    ]
  ],
  'Account' => [
    'fields' => [
      'name' => '名称',
      'emailAddress' => '电子邮件',
      'website' => '网站',
      'phoneNumber' => '电话',
      'billingAddress' => '账单地址',
      'shippingAddress' => '邮寄地址',
      'description' => '描述',
      'sicCode' => 'Sic代码',
      'industry' => '行业',
      'type' => '类型',
      'contactRole' => '标题',
      'contactIsInactive' => '未激活',
      'campaign' => '营销活动',
      'targetLists' => '目标列表',
      'targetList' => '目标列表',
      'originalLead' => '原始潜在客户'
    ],
    'links' => [
      'contacts' => '联系人',
      'contactsPrimary' => 'Contacts (primary)',
      'opportunities' => '商机',
      'cases' => '工单',
      'documents' => '文件',
      'meetingsPrimary' => '会晤（已举行）',
      'callsPrimary' => '通话（已展开）',
      'tasksPrimary' => '任务（展开）',
      'emailsPrimary' => '电子邮件（展开）',
      'targetLists' => '目标列表',
      'campaignLogRecords' => '营销活动日志',
      'campaign' => '营销活动',
      'portalUsers' => '门户网站用户',
      'originalLead' => '原始潜在客户'
    ],
    'options' => [
      'type' => [
        'Customer' => '顾客',
        'Investor' => '投资者',
        'Partner' => '伙伴',
        'Reseller' => '经销商'
      ],
      'industry' => [
        'Aerospace' => '航天',
        'Agriculture' => '农业',
        'Advertising' => '广告',
        'Apparel & Accessories' => '服饰与配饰',
        'Architecture' => '建筑',
        'Automotive' => '汽车',
        'Banking' => '银行业',
        'Biotechnology' => '生物技术',
        'Building Materials & Equipment' => '建筑材料与设备',
        'Chemical' => '化学',
        'Construction' => '施工',
        'Computer' => '电脑',
        'Defense' => '国防',
        'Creative' => '创意',
        'Culture' => '文化',
        'Consulting' => '咨询',
        'Education' => '教育',
        'Electronics' => '电子产品',
        'Electric Power' => '电力',
        'Energy' => '能源',
        'Entertainment & Leisure' => '娱乐休闲',
        'Finance' => '金融',
        'Food & Beverage' => '食品与饮料',
        'Grocery' => '杂货',
        'Hospitality' => '医药',
        'Healthcare' => '卫生保健',
        'Insurance' => '保险',
        'Legal' => '法律',
        'Manufacturing' => '制造业',
        'Mass Media' => '大众传媒',
        'Mining' => '矿产',
        'Music' => '音乐',
        'Marketing' => '百货',
        'Publishing' => '出版',
        'Petroleum' => '石油',
        'Real Estate' => '房地产',
        'Retail' => '零售',
        'Shipping' => '邮寄',
        'Service' => '服务',
        'Support' => '支持',
        'Sports' => '体育',
        'Software' => '软件',
        'Technology' => '技术',
        'Telecommunications' => '电信',
        'Television' => '电视',
        'Testing, Inspection & Certification' => '检测',
        'Transportation' => '运输',
        'Travel' => 'Travel',
        'Venture Capital' => '风险投资',
        'Wholesale' => '批发',
        'Water' => '水利'
      ]
    ],
    'labels' => [
      'Create Account' => '创建客户',
      'Copy Billing' => '复制账单地址',
      'Set Primary' => '设置首选'
    ],
    'presetFilters' => [
      'customers' => '顾客',
      'partners' => '伙伴',
      'recentlyCreated' => '最近已创建的'
    ]
  ],
  'Calendar' => [
    'modes' => [
      'month' => '月',
      'week' => '周',
      'day' => '天',
      'agendaWeek' => '周',
      'agendaDay' => '天',
      'timeline' => '时间线'
    ],
    'labels' => [
      'Today' => '今天',
      'Create' => '创建',
      'Shared' => '共享',
      'Add User' => '添加用户',
      'current' => '当前',
      'time' => '时间',
      'User List' => '用户列表',
      'Manage Users' => '管理用户',
      'View Calendar' => '查看日历',
      'Create Shared View' => 'Create Shared View'
    ]
  ],
  'Call' => [
    'fields' => [
      'name' => '名称',
      'parent' => '关联',
      'status' => '状态',
      'dateStart' => '开始日期',
      'dateEnd' => '日期结束',
      'direction' => '方向',
      'duration' => '持续时间',
      'description' => '描述',
      'users' => '用户',
      'contacts' => '联系人',
      'leads' => '潜在客户',
      'reminders' => '提醒',
      'account' => '客户',
      'acceptanceStatus' => '接受状态'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => '已计划',
        'Held' => '已进行',
        'Not Held' => '未进行'
      ],
      'direction' => [
        'Outbound' => '呼出',
        'Inbound' => '呼入'
      ],
      'acceptanceStatus' => [
        'None' => '无',
        'Accepted' => '接受',
        'Declined' => '拒绝',
        'Tentative' => '暂缓'
      ]
    ],
    'massActions' => [
      'setHeld' => '设为进行',
      'setNotHeld' => '设为未进行'
    ],
    'labels' => [
      'Create Call' => '创建通话',
      'Set Held' => '设为举行',
      'Set Not Held' => '设为未举行',
      'Send Invitations' => '发送邀请'
    ],
    'presetFilters' => [
      'planned' => '已计划',
      'held' => '已进行',
      'todays' => '今天的'
    ]
  ],
  'Campaign' => [
    'fields' => [
      'name' => '名称',
      'description' => '描述',
      'status' => '状态',
      'type' => '类型',
      'startDate' => '开始日期',
      'endDate' => '结束日期',
      'targetLists' => '目标列表',
      'excludingTargetLists' => '剔除目标列表',
      'sentCount' => '发送',
      'openedCount' => '开业',
      'clickedCount' => '点击',
      'optedOutCount' => '选择退出',
      'bouncedCount' => '退回',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => '硬弹跳',
      'softBouncedCount' => '软弹跳',
      'leadCreatedCount' => '已创建的潜在客户',
      'revenue' => '收入',
      'revenueConverted' => '收入（转换）',
      'budget' => '预算',
      'budgetConverted' => '预算（转换）',
      'budgetCurrency' => 'Budget Currency',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => '用户模板',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address'
    ],
    'links' => [
      'targetLists' => '目标列表',
      'excludingTargetLists' => '剔除目标列表',
      'accounts' => '客户',
      'contacts' => '联系人',
      'leads' => '潜在客户',
      'opportunities' => '商机',
      'campaignLogRecords' => '日志',
      'massEmails' => '群发电子邮件',
      'trackingUrls' => '追踪网址',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template'
    ],
    'options' => [
      'type' => [
        'Email' => '电子邮件',
        'Web' => '网址',
        'Television' => '电视',
        'Radio' => '无线电',
        'Newsletter' => '通讯',
        'Mail' => '邮件'
      ],
      'status' => [
        'Planning' => '规划',
        'Active' => '激活',
        'Inactive' => '非活动',
        'Complete' => '完成'
      ]
    ],
    'labels' => [
      'Create Campaign' => '创建营销活动',
      'Target Lists' => '目标列表',
      'Statistics' => '统计',
      'hard' => '硬',
      'soft' => '柔软的',
      'Unsubscribe' => '取消订阅',
      'Mass Emails' => '群发电子邮件',
      'Email Templates' => '电子邮件模板',
      'Unsubscribe again' => '再次退订',
      'Subscribe again' => '再次订阅',
      'Create Target List' => '创建目标列表',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF'
    ],
    'presetFilters' => [
      'active' => '激活'
    ],
    'messages' => [
      'unsubscribed' => '您已取消订阅我们的邮寄名单。',
      'subscribedAgain' => '你再次被订阅。'
    ],
    'tooltips' => [
      'targetLists' => '目标应该接收的消息。',
      'excludingTargetLists' => '目标不会接收营销活动消息。'
    ]
  ],
  'CampaignLogRecord' => [
    'fields' => [
      'action' => '动作',
      'actionDate' => '日期',
      'data' => '数据',
      'campaign' => '营销活动',
      'parent' => '目标',
      'object' => '目的',
      'application' => '应用',
      'queueItem' => '队列项',
      'stringData' => '字符串数据',
      'stringAdditionalData' => '字符串附加数据',
      'isTest' => '测试'
    ],
    'links' => [
      'queueItem' => '队列项',
      'parent' => '关联',
      'object' => '目的',
      'campaign' => 'Campaign'
    ],
    'options' => [
      'action' => [
        'Sent' => '发送',
        'Opened' => '开业',
        'Opted Out' => '取消订阅',
        'Bounced' => '退回',
        'Clicked' => '点击',
        'Lead Created' => '已创建的潜在客户',
        'Opted In' => '订阅'
      ]
    ],
    'labels' => [
      'All' => '全部'
    ],
    'presetFilters' => [
      'sent' => '发送',
      'opened' => '打开',
      'optedOut' => '选择退出',
      'optedIn' => 'Opted In',
      'bounced' => '反弹',
      'clicked' => '点击',
      'leadCreated' => '已创建的潜在客户'
    ]
  ],
  'CampaignTrackingUrl' => [
    'fields' => [
      'url' => '网址',
      'action' => 'Action',
      'urlToUse' => '要插入代码而不是网址',
      'message' => 'Message',
      'campaign' => '营销活动'
    ],
    'links' => [
      'campaign' => '营销活动'
    ],
    'labels' => [
      'Create CampaignTrackingUrl' => '创建跟踪网址'
    ],
    'options' => [
      'action' => [
        'Redirect' => 'Redirect',
        'Show Message' => 'Show Message'
      ]
    ],
    'tooltips' => [
      'url' => 'The recipient will be redirected to this location after they follow the link.',
      'message' => 'The message will be shown to the recipient after they follow the link. Markdown is supported.'
    ]
  ],
  'Case' => [
    'fields' => [
      'name' => '名称',
      'number' => '编号',
      'status' => '状态',
      'account' => '客户',
      'contact' => '联系人',
      'contacts' => '联系人',
      'priority' => '优先',
      'type' => '类型',
      'description' => '描述',
      'inboundEmail' => '入站邮件',
      'lead' => '潜在客户',
      'attachments' => '附件',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'inboundEmail' => '入站电子邮件',
      'account' => '客户',
      'contact' => '联系人（主）',
      'Contacts' => '联系人',
      'meetings' => '会晤',
      'calls' => '通话',
      'tasks' => '任务',
      'emails' => '电子邮件',
      'articles' => '知识库文章',
      'lead' => '潜在客户',
      'attachments' => '附件'
    ],
    'options' => [
      'status' => [
        'New' => '新建',
        'Assigned' => '已指派',
        'Pending' => '待定',
        'Closed' => '关闭',
        'Rejected' => '拒绝',
        'Duplicate' => '重复'
      ],
      'priority' => [
        'Low' => '低',
        'Normal' => '正常',
        'High' => '高',
        'Urgent' => '紧急'
      ],
      'type' => [
        'Question' => '询问',
        'Incident' => '事件',
        'Problem' => '问题'
      ]
    ],
    'labels' => [
      'Create Case' => '创建工单',
      'Close' => '关',
      'Reject' => '拒绝',
      'Closed' => '关闭',
      'Rejected' => '拒绝'
    ],
    'presetFilters' => [
      'open' => '打开',
      'closed' => '关闭'
    ]
  ],
  'Contact' => [
    'fields' => [
      'name' => '名称',
      'emailAddress' => '电子邮件',
      'title' => 'Account Title',
      'account' => '客户',
      'accounts' => '客户',
      'phoneNumber' => '电话',
      'accountType' => '客户类型',
      'doNotCall' => '不要电联',
      'address' => '地址',
      'opportunityRole' => '商机角色',
      'accountRole' => '标题',
      'description' => '描述',
      'campaign' => '营销活动',
      'targetLists' => '目标列表',
      'targetList' => '目标列表',
      'portalUser' => '门户网站用户',
      'hasPortalUser' => 'Has Portal User',
      'originalLead' => '原始潜在客户',
      'acceptanceStatus' => '验收状态',
      'accountIsInactive' => '账户未激活',
      'acceptanceStatusMeetings' => '接受状态(Meetings)',
      'acceptanceStatusCalls' => '接受状态(Calls)',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'opportunities' => '商机',
      'cases' => '工单',
      'targetLists' => '目标列表',
      'campaignLogRecords' => '营销活动日志',
      'campaign' => '营销活动',
      'account' => '帐户（主要）',
      'accounts' => '客户',
      'casesPrimary' => '工单（主要）',
      'tasksPrimary' => '任务（扩展）',
      'opportunitiesPrimary' => 'Opportunities (Primary)',
      'portalUser' => '门户用户',
      'originalLead' => '原始潜在客户',
      'documents' => '文件'
    ],
    'labels' => [
      'Create Contact' => '创建联系人'
    ],
    'options' => [
      'opportunityRole' => [
        '' => '',
        'Decision Maker' => '决策者',
        'Evaluator' => '评估者',
        'Influencer' => '影响者'
      ]
    ],
    'presetFilters' => [
      'portalUsers' => '门户用户',
      'notPortalUsers' => '不是门户用户',
      'accountActive' => '激活'
    ]
  ],
  'Document' => [
    'labels' => [
      'Create Document' => '创建文档',
      'Details' => '细节'
    ],
    'fields' => [
      'name' => '名称',
      'status' => '状态',
      'file' => '文件',
      'type' => '类型',
      'publishDate' => '发布日期',
      'expirationDate' => '结束日期',
      'description' => '描述',
      'accounts' => '账户',
      'folder' => '文件夹'
    ],
    'links' => [
      'accounts' => '账户',
      'opportunities' => '商机',
      'folder' => '文件夹',
      'leads' => '潜在客户',
      'contacts' => '联系人'
    ],
    'options' => [
      'status' => [
        'Active' => '激活',
        'Draft' => '草案',
        'Expired' => '已过期',
        'Canceled' => '取消'
      ],
      'type' => [
        '' => '没有',
        'Contract' => '合同',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => '许可协议'
      ]
    ],
    'presetFilters' => [
      'active' => '激活',
      'draft' => '草案'
    ]
  ],
  'DocumentFolder' => [
    'labels' => [
      'Create DocumentFolder' => '创建文档文件夹',
      'Manage Categories' => '管理文件夹',
      'Documents' => '文件'
    ],
    'links' => [
      'documents' => '文件'
    ]
  ],
  'EmailQueueItem' => [
    'fields' => [
      'name' => '名称',
      'status' => '状态',
      'target' => '目标',
      'sentAt' => '发送日期',
      'attemptCount' => '尝试',
      'emailAddress' => '电子邮件地址',
      'massEmail' => '群发电子邮件',
      'isTest' => '是测试'
    ],
    'links' => [
      'target' => '目标',
      'massEmail' => '群发电子邮件'
    ],
    'options' => [
      'status' => [
        'Pending' => '有待',
        'Sent' => '发送',
        'Failed' => '失败',
        'Sending' => '发送中'
      ]
    ],
    'presetFilters' => [
      'pending' => '有待',
      'sent' => '发送',
      'failed' => '失败'
    ]
  ],
  'KnowledgeBaseArticle' => [
    'labels' => [
      'Create KnowledgeBaseArticle' => '创建文章',
      'Any' => '任何',
      'Send in Email' => '在电子邮件中发送',
      'Move Up' => '提升',
      'Move Down' => '下降',
      'Move to Top' => '移到顶部',
      'Move to Bottom' => '移到底部'
    ],
    'fields' => [
      'name' => '名称',
      'status' => '状态',
      'type' => '类型',
      'attachments' => '附件',
      'publishDate' => '发布日期',
      'expirationDate' => '结束日期',
      'description' => '描述',
      'body' => '身体',
      'categories' => '分类',
      'language' => '语言',
      'portals' => '门户'
    ],
    'links' => [
      'cases' => '工单',
      'opportunities' => '商机',
      'categories' => '分类',
      'portals' => '门户'
    ],
    'options' => [
      'status' => [
        'In Review' => '回顾',
        'Draft' => '草案',
        'Archived' => '存档',
        'Published' => '发布时间'
      ],
      'type' => [
        'Article' => '文章'
      ]
    ],
    'tooltips' => [
      'portals' => '文章仅在特定门户网站上可用。'
    ],
    'presetFilters' => [
      'published' => '发布'
    ]
  ],
  'KnowledgeBaseCategory' => [
    'labels' => [
      'Create KnowledgeBaseCategory' => '创建类别',
      'Manage Categories' => '管理类别',
      'Articles' => '用品'
    ],
    'links' => [
      'articles' => '文章'
    ]
  ],
  'Lead' => [
    'labels' => [
      'Converted To' => '已转换为',
      'Create Lead' => '创建潜在客户',
      'Convert' => '转换',
      'convert' => '转换'
    ],
    'fields' => [
      'name' => '名称',
      'emailAddress' => '电子邮件',
      'title' => '标题',
      'website' => '网站',
      'phoneNumber' => '电话',
      'accountName' => '客户名称',
      'doNotCall' => '不要电联',
      'address' => '地址',
      'status' => '状态',
      'source' => '客户来源',
      'opportunityAmount' => '项目预算',
      'opportunityAmountConverted' => '项目预算（转换）',
      'description' => '描述',
      'createdAccount' => '客户',
      'createdContact' => '联系人',
      'createdOpportunity' => '商机',
      'convertedAt' => 'Converted At',
      'campaign' => '营销活动',
      'targetLists' => '目标列表',
      'targetList' => '目标列表',
      'industry' => '行业',
      'acceptanceStatus' => '验收状态',
      'opportunityAmountCurrency' => '机会金额货币',
      'acceptanceStatusMeetings' => '接受状态(Meetings)',
      'acceptanceStatusCalls' => '接受状态(Calls)',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'targetLists' => '目标列表',
      'campaignLogRecords' => '营销活动日志',
      'campaign' => '营销活动',
      'createdAccount' => '客户',
      'createdContact' => '联系人',
      'createdOpportunity' => '商机',
      'cases' => '工单',
      'documents' => '文件'
    ],
    'options' => [
      'status' => [
        'New' => '新建',
        'Assigned' => '指派',
        'In Process' => '处理中',
        'Converted' => '已转换',
        'Recycled' => '已回收',
        'Dead' => '没机会'
      ],
      'source' => [
        'Call' => '通话',
        'Email' => '电子邮件',
        'Existing Customer' => '现有客户',
        'Partner' => '伙伴',
        'Public Relations' => '公共关系',
        'Web Site' => '网站',
        'Campaign' => '营销活动',
        'Other' => '其他'
      ]
    ],
    'presetFilters' => [
      'active' => '激活',
      'actual' => '所有',
      'converted' => '已转换'
    ]
  ],
  'MassEmail' => [
    'fields' => [
      'name' => '名称',
      'status' => '状态',
      'storeSentEmails' => '存储发送的电子邮件',
      'startAt' => '开始日期',
      'fromAddress' => '发件人地址',
      'fromName' => '发件人',
      'replyToAddress' => '回复地址',
      'replyToName' => '回复名称',
      'campaign' => '营销活动',
      'emailTemplate' => '邮件模板',
      'inboundEmail' => '邮件帐户',
      'targetLists' => '目标列表',
      'excludingTargetLists' => '剔除目标列表',
      'optOutEntirely' => '完全选择退出',
      'smtpAccount' => 'SMTP帐户'
    ],
    'links' => [
      'targetLists' => '目标列表',
      'excludingTargetLists' => '排除目标列表',
      'queueItems' => '队列项',
      'campaign' => '营销活动',
      'emailTemplate' => '邮件模板',
      'inboundEmail' => '邮件帐户'
    ],
    'options' => [
      'status' => [
        'Draft' => '草稿',
        'Pending' => '待定',
        'In Process' => '处理中',
        'Complete' => '完成',
        'Canceled' => '已取消',
        'Failed' => '失败'
      ]
    ],
    'labels' => [
      'Create MassEmail' => '创建群发电子邮件',
      'Send Test' => '发送测试',
      'System SMTP' => '系统SMTP',
      'system' => '系统',
      'group' => '组'
    ],
    'messages' => [
      'selectAtLeastOneTarget' => '至少选择一个目标。',
      'testSent' => '测试电子邮件应该发送'
    ],
    'tooltips' => [
      'optOutEntirely' => '已取消订阅的收件人的电子邮件地址将被标记为已停用，他们将不会再收到任何群发电子邮件。',
      'targetLists' => '应该接收消息的目标。',
      'excludingTargetLists' => '不应该接收消息的目标。',
      'storeSentEmails' => '邮件将存储在CRM中.'
    ],
    'presetFilters' => [
      'actual' => '所有',
      'complete' => '完成'
    ]
  ],
  'Meeting' => [
    'fields' => [
      'name' => '名称',
      'parent' => '关联',
      'status' => '状态',
      'dateStart' => '开始日期',
      'dateEnd' => '结束日期',
      'duration' => '持续时间',
      'description' => '描述',
      'users' => '用户',
      'contacts' => '联系人',
      'leads' => '潜在客户',
      'reminders' => '提醒',
      'account' => '客户',
      'acceptanceStatus' => '接受状态',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'isAllDay' => 'Is All-Day',
      'sourceEmail' => 'Source Email'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => '已计划',
        'Held' => '举行',
        'Not Held' => '未举行'
      ],
      'acceptanceStatus' => [
        'None' => '无',
        'Accepted' => '接受',
        'Declined' => '拒绝',
        'Tentative' => '暂定'
      ]
    ],
    'massActions' => [
      'setHeld' => '设为举行',
      'setNotHeld' => '设为未举行'
    ],
    'labels' => [
      'Create Meeting' => '创建会晤',
      'Set Held' => '设为举行',
      'Set Not Held' => '设为未举行',
      'Send Invitations' => '发送邀请',
      'Send Cancellation' => 'Send Cancellation',
      'on time' => '准时',
      'before' => '之前',
      'All-Day' => 'All-Day',
      'Acceptance' => 'Acceptance'
    ],
    'presetFilters' => [
      'planned' => '已计划',
      'held' => '举行',
      'todays' => '今天的'
    ],
    'messages' => [
      'sendInvitationsToSelectedAttendees' => 'Invitation emails will be sent to the selected attendees.',
      'sendCancellationsToSelectedAttendees' => 'Cancellation emails will be sent to the selected attendees.',
      'selectAcceptanceStatus' => 'Set your acceptance status.',
      'nothingHasBeenSent' => '什么都没发送'
    ]
  ],
  'Opportunity' => [
    'fields' => [
      'name' => '名称',
      'account' => '客户',
      'stage' => '阶段',
      'amount' => '项目预算',
      'probability' => '概率%',
      'leadSource' => '客户来源',
      'doNotCall' => '不要电联',
      'closeDate' => '关闭日期',
      'contacts' => '联系人',
      'contact' => 'Contact (Primary)',
      'description' => '描述',
      'amountConverted' => '金额（转换）',
      'amountWeightedConverted' => '金额加权',
      'campaign' => '营销活动',
      'originalLead' => '原始潜在客户',
      'amountCurrency' => '金额货币',
      'contactRole' => '联系人角色',
      'lastStage' => '最后阶段'
    ],
    'links' => [
      'contacts' => '联系人',
      'contact' => 'Contact (Primary)',
      'documents' => '文件',
      'campaign' => '营销活动运动',
      'originalLead' => '原始潜在客户'
    ],
    'options' => [
      'stage' => [
        'Prospecting' => '预期',
        'Qualification' => '评价',
        'Proposal' => '提案',
        'Negotiation' => '协商',
        'Needs Analysis' => '需求分析',
        'Value Proposition' => '价值主张',
        'Id. Decision Makers' => 'Id决策者',
        'Perception Analysis' => '感性分析',
        'Proposal/Price Quote' => '提案/报价',
        'Negotiation/Review' => '协商/审核',
        'Closed Won' => '赢得并结束',
        'Closed Lost' => '失去并结束'
      ]
    ],
    'labels' => [
      'Create Opportunity' => '创建商机'
    ],
    'presetFilters' => [
      'open' => '打开',
      'won' => '韩元',
      'lost' => '丢失'
    ]
  ],
  'TargetList' => [
    'fields' => [
      'name' => '名称',
      'description' => '描述',
      'entryCount' => '条目计数',
      'optedOutCount' => '取消订阅',
      'campaigns' => '营销活动',
      'endDate' => '结束日期',
      'targetLists' => '目标列表',
      'includingActionList' => '包含',
      'excludingActionList' => '排除',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
      'sourceCampaign' => 'Source Campaign'
    ],
    'links' => [
      'accounts' => '客户',
      'contacts' => '联系人',
      'leads' => '潜在客户',
      'campaigns' => '营销活动',
      'massEmails' => '群发电子邮件'
    ],
    'options' => [
      'type' => [
        'Email' => '电子邮件',
        'Web' => 'Web',
        'Television' => '电视',
        'Radio' => '广播',
        'Newsletter' => '新闻稿'
      ],
      'targetStatus' => [
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed'
      ]
    ],
    'labels' => [
      'Create TargetList' => '创建目标列表',
      'Opted Out' => '选择退出',
      'Cancel Opt-Out' => '取消退出',
      'Opt-Out' => '退出'
    ]
  ],
  'Task' => [
    'fields' => [
      'name' => '名称',
      'parent' => '关联',
      'status' => '状态',
      'dateStart' => '开始日期',
      'dateEnd' => '结束日期',
      'dateStartDate' => '日期开始（全天）',
      'dateEndDate' => '日期结束（全天）',
      'priority' => '优先级',
      'description' => '描述',
      'isOverdue' => '逾期',
      'account' => '客户',
      'dateCompleted' => '完成日期',
      'attachments' => '附件',
      'reminders' => '提醒',
      'contact' => '联系人'
    ],
    'links' => [
      'attachments' => '附件',
      'account' => '用户',
      'contact' => '联系人',
      'email' => 'Email'
    ],
    'options' => [
      'status' => [
        'Not Started' => '未开始',
        'Started' => '开始',
        'Completed' => '已完成',
        'Canceled' => '取消',
        'Deferred' => '推迟'
      ],
      'priority' => [
        'Low' => '低',
        'Normal' => '正常',
        'High' => '高',
        'Urgent' => '紧急'
      ]
    ],
    'labels' => [
      'Create Task' => '创建任务',
      'Complete' => '完成',
      'overdue' => 'overdue'
    ],
    'presetFilters' => [
      'actual' => '所有',
      'completed' => '完成',
      'deferred' => '延期',
      'todays' => '今天',
      'overdue' => '过期'
    ],
    'nameOptions' => [
      'replyToEmail' => 'Reply to email'
    ]
  ]
];
