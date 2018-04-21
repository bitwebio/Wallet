<?php
function lang($phrase){
    static $lang = array(
		'CHAIN_COIN' => 'Chain Age Dest. [Days/Coin]',
		'AVGCHAIN_DAYS' => '&#216; Chain Age [<small><sup>Days</sup>/<sub>Coin</sub></small>]',
		'CHAIN_DAYS' => 'Chain Age [Days]',
		'COIN_EMC' => 'Coin Supply [VC]',
		'DAYS_DAYS' => 'Days',
		'DIFFICULTY_DIFFICULTY' => 'Difficulty',
		'EMPTY_ADDRESSES' => 'Empty Addresses',
		'FLAG_FLAG' => 'Flag',
		'HOURS_HOURS' => 'Hours',
		'ID_ID' => 'ID',
		'IN_ADDRESSES' => 'In-Use Addresses',
		'MINUTES_MINUTES' => 'Minutes',
		'NEWER_NEWER' => 'Newer',
		'OLDER_OLDER' => 'Older',
		'POS_COIN' => 'PoS &#216; Age Dest. [<small><sup>Days</sup>/<sub>Coin</sub></small>]',
		'POS_DAYS' => 'PoS Age Dest. [Days]',
		'POS_EMC' => 'PoS Stake [VC]',
		'POS_POS' => 'PoS',
		'POW_POW' => 'PoW',
		'REWARD_EMC' => 'Reward [VC]',
		'SEARCH_SEARCH' => 'Search',
		'SECONDS_SECONDS' => 'Seconds',
		'SELECT_RANGE' => 'Select Block Range',
		'SHOW_COLUMNS' => 'Show / Hide columns',
		'TIME_AGO' => 'Time Ago',
		'TX_COIN' => 'TX &#216; Age Dest. [<small><sup>Days</sup>/<sub>Coin</sub></small>]',
		'TX_COUNT' => 'TX Count',
		'TX_DAYS' => 'TX Age Dest. [Days]',
		'TX_VOLUME_EMC' => 'TX Volume [VC]',
		'TX_FEE_EMC' => 'TX Fee [VC]',
		'AVERAGE_CHARTS' => 'Average Charts',
		'DAILY_SUMMARY' => 'daily summary',
		'AVG_AGE' => 'Avg. Coin Age',
		'COIN_DESTROYED' => 'Coin Days Destroyed',
		'COIN_SUPPLY' => 'Coin Supply',
		'POW_MINTED' => 'PoW/PoS VC Minted',
		'TOTAL_AGE' => 'Total Coin Age',
		'UNUSED_ADDRESSES' => 'Unused Addresses',
		'USED_ADDRESSES' => 'Used Addresses',
		'CHANNEL_ADS' => 'Channel, e.g. ads',
		'SPECIFY_CHANNEL' => 'Specify a Channel',
		'SUBJECT_PATTERN' => 'Subject (pattern)',
		'TYPE_BUY' => 'Type, e.g. sell, buy',
		'DO_SERVICE' => 'Do you like this service?',
		'DONATION_DONATION' => 'Donation',
		'INFO_FEEDBACK' => 'Info / Feedback',
		'REFERRAL_REFERRAL' => 'Referral',
		'COINS_AVAILABLE' => 'Coins Available',
		'CONFIRMED_TRANSACTIONS' => 'Confirmed Transactions',
		'EXPLORE_EXPLORE' => 'Explore',
		'LATEST_BLOCK' => 'Latest Block',
		'POS_DIFFICULTY' => 'PoS Difficulty',
		'POW_DIFFICULTY' => 'PoW Difficulty',
		'THERE_TRANSACTIONS' => 'There are currently no unconfirmed transactions.',
		'TRANSACTION_VOLUME' => 'Transaction Volume',
		'TX_ID' => 'TX ID',
		'UNCONFIRMED_TRANSACTIONS' => 'Unconfirmed Transactions',
		'VALUE_EMC' => 'Value [VC]',
		'WELCOME_EXPLORER' => 'Welcome to the voicecoin Blockchain Explorer',
		'ADDRESS_TX' => 'Address/Block/TX',
		'CHAIN_CHAIN' => 'Chain',
		'CHARTS_CHARTS' => 'Charts',
		'EMERBOARD_EMERBOARD' => 'VoiceBoard',
		'NVS_NVS' => 'VNS',
		'SHOW_SHOW' => 'Show',
		'STATS_STATS' => 'Stats',
		'TOP_TOP' => 'Top100',
		'WALLET_WALLET' => 'Wallet',
		'N_HIDE' => 'N/A: Hide',
		'N_SHOW' => 'N/A: Show',
		'NAME_NAME' => 'Name',
		'REGISTERED_AT' => 'Registered At',
		'RESULTS_PAGE' => 'Results per page:',
		'SEARCH_NVS' => 'Search the VNS',
		'TYPE_TYPE' => 'Type',
		'VALID_DATED' => 'Valid & Out-Dated',
		'VALID_ONLY' => 'Valid Only',
		'VALID_UNTIL' => 'Expires in',
		'VALUE_VALUE' => 'Value',
		'VALUE_VALUENVS' => 'Value',
		'24H_STATISTICS' => '24h Statistics',
		'24H_STATISTICS' => '24h Transaction Statistics',
		'AVG_COIN' => 'Avg. Days/Coin',
		'BASED_H' => 'based on the last 24h',
		'BASED_TRANSACTIONS' => 'based on the last 24h - without coinbase or PoS transactions',
		'BLOCKCHAIN_STATISTICS' => 'Blockchain Statistics',
		'BLOCKS_BLOCKS' => 'Blocks',
		'BLOCKS_FOUND' => 'Blocks Found',
		'CHAIN_LENGTH' => 'Chain Length',
		'CHAIN_SIZE' => 'Chain Size',
		'COIN_DESTROYED' => 'Coin Days Destroyed',
		'EMC_MINTED' => 'VC Minted',
		'GENERAL_DAYS' => 'general statistics - the labels show the extrapolated daily change (based on the last 14 days)',
		'KNOWN_ADDRESSES' => 'Known Addresses',
		'MINUTES_BLOCKS' => 'Minutes Between Blocks',
		'NAME_STATISITICS' => 'Name Value Storage Statisitics',
		'TOP_TYPES' => 'Top 5 Types',
		'TOTAL_FEES' => 'Total Fees',
		'TOTAL_OUTPUT' => 'Total Transaction Output',
		'TOTAL_TOTAL' => 'Total',
		'TOTAL_VALUES' => 'Total Values',
		'TRANSACTIONS_TRANSACTIONS' => 'Transactions',
		'UNUSED_UNUSED' => 'Unused',
		'USED_USED' => 'Used',
		'VALID_RECORDS' => 'Valid DNS Records',
		'VALID_VALUES' => 'Valid Values',
		'ACCOUNT_ACCOUNT' => 'Account',
		'ADDRESS_ADDRESS' => 'Address',
		'BALANCE_EMC' => 'Balance [VC]',
		'HOLDINGS_EMC' => 'Holdings [VC]',
		'LAST_RECEIVE' => 'Last Receive',
		'LAST_SENT' => 'Last Sent',
		'OTHERS_OTHERS' => 'Others',
		'PERCENTAGE_COINS' => 'Percentage of Coins [%]',
		'PERCENTAGE_PERCENTAGE' => 'Percentage [%]',
		'RANK_RANK' => 'Rank',
		'TOP_ACCOUNTS' => 'Top Accounts',
		'TOP_100ACCOUNTS' => 'Top 100 Accounts',
		'TOP_ADDRESSES' => 'Top Addresses',
		'WEALTH_DISTRIBUTION' => 'Wealth Distribution',
		'ADDITIONAL_APPLY' => 'Additional fees will apply.',
		'ADDRESS_BOOK' => 'Address Book',
		'ALL_TRANSACTIONS' => 'All Transactions',
		'AMOUNT_EMC' => 'Amount [VC]',
		'BALANCE_BALANCE' => 'Balance',
		'BETA_RISK' => 'Beta phase - Use on our own risk!',
		'BUY_ADDRESS' => 'Buy a new Address',
		'CAPTCHA_CAPTCHA' => 'captcha',
		'CATEGORY_CATEGORY' => 'Category',
		'FEE_FEE' => 'Fee',
		'FROM_TO' => 'From/To',
		'GET_ADDRESS' => 'Get a new address',
		'I_THE' => 'I aggree with the',
		'TERMS_SERVICE' => 'terms of servce',
		'LABEL_LABEL' => 'Label',
		'LOGIN_LOGIN' => 'Login',
		'NAME_DELETE' => 'VNS Delete',
		'NAME_NAME' => 'Name',
		'NEW_NAME' => 'VNS Entry',
		'NAME_UPDATE' => 'VNS Update',
		'NEW_ADDRESS' => 'New Address',
		'NEW_ENTRY' => 'New Entry',
		'NVS_NVS' => 'VNS',
		'OR_OR' => 'OR',
		'OVERVIEW_OVERVIEW' => 'Overview',
		'SETTINGS_SETTINGS' => 'Settings',
		'LOGOUT_LOGOUT' => 'Logout',
		'PASSWORD_PASSWORD' => 'Password',
		'RECEIVE_RECEIVE' => 'Receive',
		'RECENT_TRANSACTIONS' => 'Recent Transactions',
		'REGISTER_REGISTER' => 'Register',
		'REPEAT_PASSWORD' => 'Repeat Pasword',
		'SAVE_SAVE' => 'Save',
		'SEND_SEND' => 'Send',
		'STAKE_STAKE' => 'Stake',
		'STATUS_STATUS' => 'Status',
		'THIS_BALANCE1' => 'This transaction will subtract',
		'THIS_BALANCE2' => 'VC from your balance.',
		'TRANSACTION_EMC' => 'Transaction fee:',
		'USERNAME_USERNAME' => 'Username',
		'VALID_EXTERNAL' => 'valid (external)',
		'VALID_INTERNAL' => 'valid (internal)',
		'VOLUME_VOLUME' => 'Volume',
		'EMCSSL_VERYHIGH' => 'Use VCSSL with current password [Very High Security]',
		'EMCSSL_HIGH' => 'Use VCSSL only [High Security]',
		'EMCSSL_LOW' => 'Use VCSSL or password [Low Security]',
		'EMCSSL_DEACTIVATE' => 'Deactivate VCSSL',
		'YOUR_CERTIFICATE' => 'Your VCSSL certificate',
		'YOU_LOGIN' => 'You can use VCSSL to secure your login.',
		'WHAT_EMCSSL' => 'What is VCSSL?',
		'EMCSSL_SET' => 'VCSSL settings saved',
		'UPDATE_SETTINGS' => 'Update Settings',
		'CURRENT_PASSWORD' => 'Current Password',
		'NEW_PASSWORD' => 'New Password',
		'REPEATNEW_PASSWORD' => 'Repeat NEW Password',
		'DAYS_COIN' => '<sup>Days</sup>/<sub>Coin</sub>',
		'ANNUAL_GROWTH' => 'Annual Growth',
		'PER_CHARTS' => 'Per Block Charts',
		'POS_DIFF' => 'PoS Diff.',
		'POW_DIFF' => 'PoW Diff.',
		'COIN_AGE' => 'Coin Age',
		'TX_ONLY' => 'tx with fee > 0 only',
		'POW_BLOCKS' => 'PoW/PoS Blocks',
		'TOP_100ADDRESSES' => 'Top 100 Addresses',
		'NEVER_NEVER' => 'never',
		'ALL_ALL' => 'All',
		'COIN_DISTRIBUTION' => 'Coin Distribution',
		'LOGIN_SUCCESSFULL' => 'Login successfull',
		'LOGIN_NOTSUCCESSFULL' => 'Login was not successfulll',
		'AT_NECESSARY' => 'At least 4 characters are necessary',
		'PLEASE_CHARACTERS' => 'Please use max. 50 characters',
		'A_REQUEST' => 'A Problem occurred. Please review your request.',
		'PLEASE_SERVICE' => 'Please agree to the terms of service.',
		'PASSWORDS_MATCH' => 'Passwords match',
		'PASSWORDS_NOMATCH' => 'Passwords does not match',
		'THIS_TAKEN' => 'This username is already taken',
		'THIS_FREE' => 'This username is free',
		'INVALID_CAPTCHA' => 'Invalid captcha',
		'REQUEST_INCOMPLETE' => 'Request was incomplete',
		'USER_CREATED' => 'The User has been created',
		'UNCONFIRMED_UNCONFIRMED' => 'Unconfirmed',
		'RESERVED_RESERVED' => 'Reserved',
		'STOCK_BTC' => 'Stock Ex. - VC/BTC',
		'STOCK_USD' => 'Stock Ex. - VC/USD',
		'STAKE_PERIOD' => 'Stake in this period',
		'EARNED_STAKE' => 'Earned Stake',
		'AVERAGE_AT' => 'Average price at',
		'VWAP_VWAP' => 'VWAP',
		'LAST_LAST' => 'Last',
		'LOW_LOW' => 'Low',
		'HIGH_HIGH' => 'High',
		'SENT_SENT' => 'Sent',
		'INVALID_INVALID' => 'invalid',
		'THIS_EXTERNALADDRESS' => 'This is an external address',
		'THIS_INVALIDADDRESS' => 'This address is invalid',
		'THIS_TO' => 'This address belongs to',
		'YOU_YOU' => 'you',
		'NEW_CREATED' => 'New address book entry has been created.',
		'SOMETHING_WRONG' => 'Something went wrong.',
		'SYSTEM_SYSTEM' => 'System',
		'ADDRESS_REMOVED' => 'Address book entry has been removed.',
		'NAME_CHANGED' => 'Name has been changed.',
		'ADDRESS_CHANGED' => 'Address has been changed.',
		'SEND_COINS' => 'Send Coins',
		'THIS_SUBSTRACTBALANCE' => 'This transaction will subtract "+(parseFloat(amount)+parseFloat(fee))+" VC from your balance.',
		'THIS_SUBSTRACTBALANCE2' => 'This transaction will subtract "+amount+" VC from your balance.',
		'TRANSACTION_QUEUE' => 'Transaction has been added to the queue.',
		'EMC_TO' => 'VC have been transferred to',
		'ADDRESSES_ADDRESSES' => 'Addresses',
		'RECEIVED_RECEIVED' => 'Received',
		'LABEL_CHANGED' => 'Label has been changed.',
		'NEW_ADDRESSCREATED' => 'New address has been created.',
		'REGISTER_PAIR' => 'Register Name->Value pair',
		'UPDATE_PAIR' => 'Update Name->Value pair',
		'DELETE_PAIR' => 'Delete Name->Value pair',
		'REGISTER_NAME' => 'Register Name',
		'THE_LATER' => 'The wallet client offers the possibility to send coins to a name.
This name will be mapped to the registration address, which is always a new address.
Coins which are send to this address, won\'t be credited to your account.
You can change the registration address to one of your addresses or any other address later.',
		'ADDITIONAL_DAYS' => 'Additional Days',
		'UPDATE_NAME' => 'Update Name',
		'MOVE_ADDRESS' => 'Move to address',
		'DELETE_NAME' => 'Delete Name',
		'NAME_REGFEES' => 'Name registration fees',
		'NAME_UPFEES' => 'Name update fees',
		'NAME_CONFIRMED' => 'Name registration was successful - please wait until it is confirmed',
		'NAME_DELETED' => 'Name has been deleted',
		'NAME_UPSUCCESS' => 'Name update was successfull',
		'THIS_NAMETAKEN' => 'This name is already taken',
		'BLOCK_DETAILS' => 'Block Details',
		'HASH_HASH' => 'Hash',
		'TIME_TIME' => 'Time',
		'NONCE_NONCE' => 'Nonce',
		'MERKLE_ROOT' => 'Merkle Root',
		'INPUTS_INPUTS' => 'Inputs',
		'OUTPUTS_OUTPUTS' => 'Outputs',
		'MINT_MINT' => 'Mint',
		'SIZE_SIZE' => 'Size',
		'COIN_COIN' => 'Coin',
		'UNKNOWN_BLOCK' => 'Unknown Block',
		'PLEASE_HASH' => 'Please provide a valid address, block hash, block ID or transaction hash.',
		'TRANSACTION_OVERVIEW' => 'Transaction Overview',
		'DATE_DATE' => 'Date',
		'UNKNOWN_ADDRESS' => 'Unknown Address',
		'NO_PROVIDED' => 'No Address Provided',
		'COINS_COINS' => 'Coins',
		'RECEIVED_TX' => 'Received in TX',
		'SPEND_TX' => 'Spent in TX',
		'AGE_AGE' => 'Age',
		'MINTING_CHANCE' => 'Minting Chance',
		'WITHIN_H' => 'within 24h',
		'ESTIMATED_REWARD' => 'Estimated Reward',
		'ESTIMATED_ACCVALUE' => 'Estimated Account Value',
		'SHOW_ADDRESSES' => 'Show empty addresses',
		'TRANSACTION_DETAILS' => 'Transaction Details',
		'CONFIRMED_BLOCK' => 'Confirmed with block',
		'TRACE_TRACE' => 'Trace',
		'COIN_DAYS' => 'Coin Days',
		'UNSPEND_UNSPEND' => 'unspent',
		'MAINTENANCE_MAINTENANCE' => 'The voicecoin Blockchain Explorer is currently down for maintenance!',
		'UNKNOWN_TRANSACTIONS' => 'Unknown Transaction',
		'NO_TXPROVIDED' => 'No Transaction Provided',
		'TRACE_OF' => 'Trace of',
		'CLAIM_NAME' => 'Claim Name',
		'CLAIM_INFO' => 'If you have moved a name to one of your online addresses (via name_update) you can claim the ownership here.',
		'NAME_CLAIMED' => 'You have claimed this name.',
		'NAME_BELONG' => 'This name does not belong to any of your addresses.',
		'NAME_NOTREGISTERED' => 'This name is not registered.',
		'INTEREST_INTEREST' => 'Interest',
		'EXPECTED_INTEREST' => 'Expected annual interest',
		'AVERAGE_INTEREST' => 'Average daily interest',
		'BASED_M' => 'based on the last month',
		'WALLET_BLOCKS' => 'Blocks Found',
		'POOL_STATISTICS' => 'Pool Statistics'
		);
    return $lang[$phrase];
}
?>
