<?php

class GoogleAnalytics extends DataExtension

{
        private static $db = array (
				'GoogleAnalyticsAccountID' => 'Text',
        );
         
        public function updateCMSFields(FieldList $fields) {
                $fields->addFieldToTab('Root.Main', new TextField('GoogleAnalyticsAccountID', 'Google Analytics Code (Example: UA-XXXXXXXX-X)', '', 14));
        }
         
        function contentControllerInit($controller) {
        }
         
}