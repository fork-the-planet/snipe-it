<?php

return [
    'about_assets_title'           => '關於資產',
    'about_assets_text'            => '資產是按序號或資產標籤追蹤的物品。 他們往往是高價值並標示為重要的物品。',
    'archived'  				=> '已封存',
    'asset'  					=> '資產',
    'bulk_checkout'             => '批次借出',
    'bulk_checkin'              => 'Bulk Checkin',
    'checkin'  					=> '資產繳回',
    'checkout'  				=> '借出資產',
    'clear'                     => 'Clear',
    'clone'  					=> '複製資產',
    'deployable'  				=> '可部署',
    'deleted'  					=> '此資產已被刪除.',
    'delete_confirm'            => '您確定要刪除此資產嗎？',
    'edit'  					=> '編輯資產',
    'model_deleted'  			=> '此資產模板已被刪除. 你必須先還原資產模板才可還原資產.',
    'model_invalid'             => 'This model for this asset is invalid.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
    'requestable'               => '可申領',
    'requested'				    => '已申領',
    'not_requestable'           => '不可申請',
    'requestable_status_warning' => '請不要更改可申請狀態',
    'restore'  					=> '還原資產',
    'pending'  					=> '待處理',
    'undeployable'  			=> '不可部署',
    'undeployable_tooltip'  	=> '此資產的狀態標籤為不可部署，因此目前無法借出。',
    'view'  					=> '檢視資產',
    'csv_error' => '你的 CSV 檔案有錯誤',
    'import_text' => '<p>Upload a CSV that contains asset history. The assets and users MUST already exist in the system, or they will be skipped. Matching assets for history import happens against the asset tag. We will try to find a matching user based on the user\'s name you provide, and the criteria you select below. If you do not select any criteria below, it will simply try to match on the username format you configured in the <code>Admin &gt; General Settings</code>.</p><p>Fields included in the CSV must match the headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Any additional fields will be ignored. </p><p>Checkin Date: blank or future checkin dates will checkout items to associated user.  Excluding the Checkin Date column will create a checkin date with todays date.</p>    ',
    'csv_import_match_f-l' => 'Try to match users by <strong>firstname.lastname</strong> (<code>jane.smith</code>) format',
    'csv_import_match_initial_last' => 'Try to match users by <strong>first initial last name</strong> (<code>jsmith</code>) format',
    'csv_import_match_first' => 'Try to match users by <strong>first name</strong> (<code>jane</code>) format',
    'csv_import_match_email' => 'Try to match users by <strong>email</strong> as username',
    'csv_import_match_username' => 'Try to match users by <strong>username</strong>',
    'error_messages' => '錯誤訊息:',
    'success_messages' => '成功訊息:',
    'alert_details' => '請看下面的詳細資料.',
    'custom_export' => '自定義匯出',
    'mfg_warranty_lookup' => ':manufacturer 保固狀態查詢',
    'user_department' => '使用者部門',
];
