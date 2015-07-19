<?php

return [
	
	/*
	|--------------------------------------------------------------------------
	| Site & Board Config
	|--------------------------------------------------------------------------
	|
	| The names and descriptions of important site and board options.
	|
	*/
	
	'legend' => [
		'permissions'   => [
			'board_controls' => "Board Controls",
			'board_images'   => "Images",
			'board_posts'    => "Posting",
			'board_users'    => "User Tools",
			'site_tools'     => "Site Tools",
			'system_tools'   => "System Tools",
		],
		
		'account_basic' => "Account Details",
		'attachments'   => "Attachment Options",
		'bans'          => "Ban Options",
		
		'boards'        => "Board Options",
		'board_banners' => "Board Banners",
		'board_basic'   => "Basic Details",
		'board_posts'   => "Post Options",
		'board_threads' => "Thread Options",
		'style'         => "Styling",
		
		'navigation'    => "Site Navigation",
	],
	
	'option' => [
		'board_uri'               => "URI",
		'title'                   => "Title",
		'description'             => "Subtitle",
		
		'boardBasicUri'           => "URI",
		'boardBasicTitle'         => "Title",
		'boardBasicDesc'          => "Description",
		'boardBasicOverboard'     => "Stream to Overboard",
		'boardBasicIndexed'       => "Publicly Indexed",
		'boardBasicWorksafe'      => "Safe for Work",
		'boardCustomCSS'          => "Custom CSS",
		
		'boardAssetBannerUpload'  => "Upload new board banner",
		
		'boardCreateMax'          => "Maximum boards per user",
		'boardCreateTimer'        => "Cooldown between board creations (min)",
		
		'boardListShow'           => "Show top boards in primary navigation",
		
		'attachmentFilesize'      => "Maximum filesize (KiB)",
		'attachmentThumbnailSize' => "Attachment preview size (px)",
		'banMaxLength'            => "Maximum length for bans (days)",
		'banSubnets'              => "Allow subnet bans",
		
		'postAttachmentsMax'      => "Maximum attachments per post",
		'postMaxLength'           => "Maximum characters per post",
		'postMinLength'           => "Minimum characters per post",
		
		'postsPerPage'            => "Threads per page",
		
		'desc' => [
			'board_uri' => "Part of the URL used to open your board. Cannot be changed.",
		],
	],
	
	'permission' => [
		'master' => [
			'help' => [
				'quickcheck' => "Quick check all",
				
				'inherit'    => "Defaults to 'no', but will inherit a 'yes' from parent roles.",
				'allow'      => "Give the role permission.",
				'deny'       => "Never allows this role to have this permission, even if a parent role allows it.",
			],
			
			'inherit' => "Inherit",
			'allow'   => "Allow",
			'deny'    => "Never",
		],
		
		'board' => [
			'logs'   => "View staff logs",
			'config' => "Edit board config",
			'create' => "Create board",
			'delete' => "Delete board",
			
			'image' => [
				'ban' => "Ban attachments",
				'delete' => [
					'other' => "Delete anyone's attachments",
					'self' => "Delete own attachments",
				],
				'spoiler' => [
					'other' => "Spoiler anyone's attachments",
					'upload' => "Spoiler own attachments",
				],
				'upload' => "Upload attachments",
			],
			
			'post' => [
				'create' => "Post threads and replies",
				'delete' => [
					'other' => "Delete anyone's content",
					'self' => "Delete own content",
				],
				'edit' => [
					'other' => "Edit anyone's content",
					'self' => "Edit own content",
				],
				'sticky' => "Sticky anyone's threads",
			],
			
			'reassign' => "Reassign board",
			
			'user' => [
				'ban' => [
					'free' => "Ban IP freely for any reason ",
					'reason' => "Ban IP for post and reason",
				],
				'role' => "Assign board roles to user",
				'unban' => "Unban IP",
			],
			
		],
		
		'site' => [
			'pm' => "PM users",
			'user' => [
				'create' => "Create user",
				'merge' => "Merge user into own account",
			],
		],
		
		'sys' => [
			'boards' => "Edit other's boards",
			'cache' => "Clear system cache",
			'config' => "Edit system config",
			'logs' => "View and manipulate logs",
			'payments' => "Edit payments and donations",
			'permissions' => "Edit role permissions",
			'roles' => "Edit roles",
			'tools' => "Access system tools",
			'users' => "Manage users",
		],
	],
	
	'create' => "Create",
	'upload' => "Upload",
	'submit' => "Save Changes",
];
