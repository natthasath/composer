<?php
namespace EDAM\Limits;

/**
 * Autogenerated by Thrift Compiler (0.9.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


final class Constant extends \Thrift\Type\TConstant {
  static protected $EDAM_ATTRIBUTE_LEN_MIN;
  static protected $EDAM_ATTRIBUTE_LEN_MAX;
  static protected $EDAM_ATTRIBUTE_REGEX;
  static protected $EDAM_ATTRIBUTE_LIST_MAX;
  static protected $EDAM_ATTRIBUTE_MAP_MAX;
  static protected $EDAM_GUID_LEN_MIN;
  static protected $EDAM_GUID_LEN_MAX;
  static protected $EDAM_GUID_REGEX;
  static protected $EDAM_EMAIL_LEN_MIN;
  static protected $EDAM_EMAIL_LEN_MAX;
  static protected $EDAM_EMAIL_LOCAL_REGEX;
  static protected $EDAM_EMAIL_DOMAIN_REGEX;
  static protected $EDAM_EMAIL_REGEX;
  static protected $EDAM_VAT_REGEX;
  static protected $EDAM_TIMEZONE_LEN_MIN;
  static protected $EDAM_TIMEZONE_LEN_MAX;
  static protected $EDAM_TIMEZONE_REGEX;
  static protected $EDAM_MIME_LEN_MIN;
  static protected $EDAM_MIME_LEN_MAX;
  static protected $EDAM_MIME_REGEX;
  static protected $EDAM_MIME_TYPE_GIF;
  static protected $EDAM_MIME_TYPE_JPEG;
  static protected $EDAM_MIME_TYPE_PNG;
  static protected $EDAM_MIME_TYPE_WAV;
  static protected $EDAM_MIME_TYPE_MP3;
  static protected $EDAM_MIME_TYPE_AMR;
  static protected $EDAM_MIME_TYPE_AAC;
  static protected $EDAM_MIME_TYPE_M4A;
  static protected $EDAM_MIME_TYPE_MP4_VIDEO;
  static protected $EDAM_MIME_TYPE_INK;
  static protected $EDAM_MIME_TYPE_PDF;
  static protected $EDAM_MIME_TYPE_DEFAULT;
  static protected $EDAM_MIME_TYPES;
  static protected $EDAM_INDEXABLE_RESOURCE_MIME_TYPES;
  static protected $EDAM_SEARCH_QUERY_LEN_MIN;
  static protected $EDAM_SEARCH_QUERY_LEN_MAX;
  static protected $EDAM_SEARCH_QUERY_REGEX;
  static protected $EDAM_HASH_LEN;
  static protected $EDAM_USER_USERNAME_LEN_MIN;
  static protected $EDAM_USER_USERNAME_LEN_MAX;
  static protected $EDAM_USER_USERNAME_REGEX;
  static protected $EDAM_USER_NAME_LEN_MIN;
  static protected $EDAM_USER_NAME_LEN_MAX;
  static protected $EDAM_USER_NAME_REGEX;
  static protected $EDAM_TAG_NAME_LEN_MIN;
  static protected $EDAM_TAG_NAME_LEN_MAX;
  static protected $EDAM_TAG_NAME_REGEX;
  static protected $EDAM_NOTE_TITLE_LEN_MIN;
  static protected $EDAM_NOTE_TITLE_LEN_MAX;
  static protected $EDAM_NOTE_TITLE_REGEX;
  static protected $EDAM_NOTE_CONTENT_LEN_MIN;
  static protected $EDAM_NOTE_CONTENT_LEN_MAX;
  static protected $EDAM_APPLICATIONDATA_NAME_LEN_MIN;
  static protected $EDAM_APPLICATIONDATA_NAME_LEN_MAX;
  static protected $EDAM_APPLICATIONDATA_VALUE_LEN_MIN;
  static protected $EDAM_APPLICATIONDATA_VALUE_LEN_MAX;
  static protected $EDAM_APPLICATIONDATA_ENTRY_LEN_MAX;
  static protected $EDAM_APPLICATIONDATA_NAME_REGEX;
  static protected $EDAM_APPLICATIONDATA_VALUE_REGEX;
  static protected $EDAM_NOTEBOOK_NAME_LEN_MIN;
  static protected $EDAM_NOTEBOOK_NAME_LEN_MAX;
  static protected $EDAM_NOTEBOOK_NAME_REGEX;
  static protected $EDAM_NOTEBOOK_STACK_LEN_MIN;
  static protected $EDAM_NOTEBOOK_STACK_LEN_MAX;
  static protected $EDAM_NOTEBOOK_STACK_REGEX;
  static protected $EDAM_PUBLISHING_URI_LEN_MIN;
  static protected $EDAM_PUBLISHING_URI_LEN_MAX;
  static protected $EDAM_PUBLISHING_URI_REGEX;
  static protected $EDAM_PUBLISHING_URI_PROHIBITED;
  static protected $EDAM_PUBLISHING_DESCRIPTION_LEN_MIN;
  static protected $EDAM_PUBLISHING_DESCRIPTION_LEN_MAX;
  static protected $EDAM_PUBLISHING_DESCRIPTION_REGEX;
  static protected $EDAM_SAVED_SEARCH_NAME_LEN_MIN;
  static protected $EDAM_SAVED_SEARCH_NAME_LEN_MAX;
  static protected $EDAM_SAVED_SEARCH_NAME_REGEX;
  static protected $EDAM_USER_PASSWORD_LEN_MIN;
  static protected $EDAM_USER_PASSWORD_LEN_MAX;
  static protected $EDAM_USER_PASSWORD_REGEX;
  static protected $EDAM_BUSINESS_URI_LEN_MAX;
  static protected $EDAM_NOTE_TAGS_MAX;
  static protected $EDAM_NOTE_RESOURCES_MAX;
  static protected $EDAM_USER_TAGS_MAX;
  static protected $EDAM_BUSINESS_TAGS_MAX;
  static protected $EDAM_USER_SAVED_SEARCHES_MAX;
  static protected $EDAM_USER_NOTES_MAX;
  static protected $EDAM_BUSINESS_NOTES_MAX;
  static protected $EDAM_USER_NOTEBOOKS_MAX;
  static protected $EDAM_BUSINESS_NOTEBOOKS_MAX;
  static protected $EDAM_USER_RECENT_MAILED_ADDRESSES_MAX;
  static protected $EDAM_USER_MAIL_LIMIT_DAILY_FREE;
  static protected $EDAM_USER_MAIL_LIMIT_DAILY_PREMIUM;
  static protected $EDAM_USER_UPLOAD_LIMIT_FREE;
  static protected $EDAM_USER_UPLOAD_LIMIT_PREMIUM;
  static protected $EDAM_USER_UPLOAD_LIMIT_BUSINESS;
  static protected $EDAM_NOTE_SIZE_MAX_FREE;
  static protected $EDAM_NOTE_SIZE_MAX_PREMIUM;
  static protected $EDAM_RESOURCE_SIZE_MAX_FREE;
  static protected $EDAM_RESOURCE_SIZE_MAX_PREMIUM;
  static protected $EDAM_USER_LINKED_NOTEBOOK_MAX;
  static protected $EDAM_USER_LINKED_NOTEBOOK_MAX_PREMIUM;
  static protected $EDAM_NOTEBOOK_SHARED_NOTEBOOK_MAX;
  static protected $EDAM_NOTE_CONTENT_CLASS_LEN_MIN;
  static protected $EDAM_NOTE_CONTENT_CLASS_LEN_MAX;
  static protected $EDAM_NOTE_CONTENT_CLASS_REGEX;
  static protected $EDAM_HELLO_APP_CONTENT_CLASS_PREFIX;
  static protected $EDAM_FOOD_APP_CONTENT_CLASS_PREFIX;
  static protected $EDAM_CONTENT_CLASS_HELLO_ENCOUNTER;
  static protected $EDAM_CONTENT_CLASS_HELLO_PROFILE;
  static protected $EDAM_CONTENT_CLASS_FOOD_MEAL;
  static protected $EDAM_CONTENT_CLASS_SKITCH_PREFIX;
  static protected $EDAM_CONTENT_CLASS_SKITCH;
  static protected $EDAM_CONTENT_CLASS_SKITCH_PDF;
  static protected $EDAM_CONTENT_CLASS_PENULTIMATE_PREFIX;
  static protected $EDAM_CONTENT_CLASS_PENULTIMATE_NOTEBOOK;
  static protected $EDAM_RELATED_PLAINTEXT_LEN_MIN;
  static protected $EDAM_RELATED_PLAINTEXT_LEN_MAX;
  static protected $EDAM_RELATED_MAX_NOTES;
  static protected $EDAM_RELATED_MAX_NOTEBOOKS;
  static protected $EDAM_RELATED_MAX_TAGS;
  static protected $EDAM_BUSINESS_NOTEBOOK_DESCRIPTION_LEN_MIN;
  static protected $EDAM_BUSINESS_NOTEBOOK_DESCRIPTION_LEN_MAX;
  static protected $EDAM_BUSINESS_NOTEBOOK_DESCRIPTION_REGEX;
  static protected $EDAM_BUSINESS_PHONE_NUMBER_LEN_MAX;
  static protected $EDAM_PREFERENCE_NAME_LEN_MIN;
  static protected $EDAM_PREFERENCE_NAME_LEN_MAX;
  static protected $EDAM_PREFERENCE_VALUE_LEN_MIN;
  static protected $EDAM_PREFERENCE_VALUE_LEN_MAX;
  static protected $EDAM_MAX_PREFERENCES;
  static protected $EDAM_MAX_VALUES_PER_PREFERENCE;
  static protected $EDAM_PREFERENCE_NAME_REGEX;
  static protected $EDAM_PREFERENCE_VALUE_REGEX;
  static protected $EDAM_PREFERENCE_SHORTCUTS;
  static protected $EDAM_PREFERENCE_SHORTCUTS_MAX_VALUES;
  static protected $EDAM_DEVICE_ID_LEN_MAX;
  static protected $EDAM_DEVICE_ID_REGEX;
  static protected $EDAM_DEVICE_DESCRIPTION_LEN_MAX;
  static protected $EDAM_DEVICE_DESCRIPTION_REGEX;
  static protected $EDAM_SEARCH_SUGGESTIONS_MAX;
  static protected $EDAM_SEARCH_SUGGESTIONS_PREFIX_LEN_MAX;
  static protected $EDAM_SEARCH_SUGGESTIONS_PREFIX_LEN_MIN;

  static protected function init_EDAM_ATTRIBUTE_LEN_MIN() {
    return 1;
  }

  static protected function init_EDAM_ATTRIBUTE_LEN_MAX() {
    return 4096;
  }

  static protected function init_EDAM_ATTRIBUTE_REGEX() {
    return "^[^\\p{Cc}\\p{Zl}\\p{Zp}]{1,4096}\$";
  }

  static protected function init_EDAM_ATTRIBUTE_LIST_MAX() {
    return 100;
  }

  static protected function init_EDAM_ATTRIBUTE_MAP_MAX() {
    return 100;
  }

  static protected function init_EDAM_GUID_LEN_MIN() {
    return 36;
  }

  static protected function init_EDAM_GUID_LEN_MAX() {
    return 36;
  }

  static protected function init_EDAM_GUID_REGEX() {
    return "^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}\$";
  }

  static protected function init_EDAM_EMAIL_LEN_MIN() {
    return 6;
  }

  static protected function init_EDAM_EMAIL_LEN_MAX() {
    return 255;
  }

  static protected function init_EDAM_EMAIL_LOCAL_REGEX() {
    return "^[A-Za-z0-9!#\$%&'*+/=?^_`{|}~-]+(\\.[A-Za-z0-9!#\$%&'*+/=?^_`{|}~-]+)*\$";
  }

  static protected function init_EDAM_EMAIL_DOMAIN_REGEX() {
    return "^[A-Za-z0-9-]+(\\.[A-Za-z0-9-]+)*\\.([A-Za-z]{2,})\$";
  }

  static protected function init_EDAM_EMAIL_REGEX() {
    return "^[A-Za-z0-9!#\$%&'*+/=?^_`{|}~-]+(\\.[A-Za-z0-9!#\$%&'*+/=?^_`{|}~-]+)*@[A-Za-z0-9-]+(\\.[A-Za-z0-9-]+)*\\.([A-Za-z]{2,})\$";
  }

  static protected function init_EDAM_VAT_REGEX() {
    return "^((AT)?U[0-9]{8}|(BE)?0?[0-9]{9}|(BG)?[0-9]{9,10}|(CY)?[0-9]{8}L|(CZ)?[0-9]{8,10}|(DE)?[0-9]{9}|(DK)?[0-9]{8}|(EE)?[0-9]{9}|(EL|GR)?[0-9]{9}|(ES)?[0-9A-Z][0-9]{7}[0-9A-Z]|(FI)?[0-9]{8}|(FR)?[0-9A-Z]{2}[0-9]{9}|(GB)?([0-9]{9}([0-9]{3})?|[A-Z]{2}[0-9]{3})|(HU)?[0-9]{8}|(IE)?[0-9]S[0-9]{5}L|(IT)?[0-9]{11}|(LT)?([0-9]{9}|[0-9]{12})|(LU)?[0-9]{8}|(LV)?[0-9]{11}|(MT)?[0-9]{8}|(NL)?[0-9]{9}B[0-9]{2}|(PL)?[0-9]{10}|(PT)?[0-9]{9}|(RO)?[0-9]{2,10}|(SE)?[0-9]{12}|(SI)?[0-9]{8}|(SK)?[0-9]{10})|[0-9]{9}MVA|[0-9]{6}|CHE[0-9]{9}(TVA|MWST|IVA)\$";
  }

  static protected function init_EDAM_TIMEZONE_LEN_MIN() {
    return 1;
  }

  static protected function init_EDAM_TIMEZONE_LEN_MAX() {
    return 32;
  }

  static protected function init_EDAM_TIMEZONE_REGEX() {
    return "^([A-Za-z_-]+(/[A-Za-z_-]+)*)|(GMT(-|\\+)[0-9]{1,2}(:[0-9]{2})?)\$";
  }

  static protected function init_EDAM_MIME_LEN_MIN() {
    return 3;
  }

  static protected function init_EDAM_MIME_LEN_MAX() {
    return 255;
  }

  static protected function init_EDAM_MIME_REGEX() {
    return "^[A-Za-z]+/[A-Za-z0-9._+-]+\$";
  }

  static protected function init_EDAM_MIME_TYPE_GIF() {
    return "image/gif";
  }

  static protected function init_EDAM_MIME_TYPE_JPEG() {
    return "image/jpeg";
  }

  static protected function init_EDAM_MIME_TYPE_PNG() {
    return "image/png";
  }

  static protected function init_EDAM_MIME_TYPE_WAV() {
    return "audio/wav";
  }

  static protected function init_EDAM_MIME_TYPE_MP3() {
    return "audio/mpeg";
  }

  static protected function init_EDAM_MIME_TYPE_AMR() {
    return "audio/amr";
  }

  static protected function init_EDAM_MIME_TYPE_AAC() {
    return "audio/aac";
  }

  static protected function init_EDAM_MIME_TYPE_M4A() {
    return "audio/mp4";
  }

  static protected function init_EDAM_MIME_TYPE_MP4_VIDEO() {
    return "video/mp4";
  }

  static protected function init_EDAM_MIME_TYPE_INK() {
    return "application/vnd.evernote.ink";
  }

  static protected function init_EDAM_MIME_TYPE_PDF() {
    return "application/pdf";
  }

  static protected function init_EDAM_MIME_TYPE_DEFAULT() {
    return "application/octet-stream";
  }

  static protected function init_EDAM_MIME_TYPES() {
    return array(
      "image/gif" => true,
      "image/jpeg" => true,
      "image/png" => true,
      "audio/wav" => true,
      "audio/mpeg" => true,
      "audio/amr" => true,
      "application/vnd.evernote.ink" => true,
      "application/pdf" => true,
      "video/mp4" => true,
      "audio/aac" => true,
      "audio/mp4" => true,
    );
  }

  static protected function init_EDAM_INDEXABLE_RESOURCE_MIME_TYPES() {
    return array(
      "application/msword" => true,
      "application/mspowerpoint" => true,
      "application/excel" => true,
      "application/vnd.ms-word" => true,
      "application/vnd.ms-powerpoint" => true,
      "application/vnd.ms-excel" => true,
      "application/vnd.openxmlformats-officedocument.wordprocessingml.document" => true,
      "application/vnd.openxmlformats-officedocument.presentationml.presentation" => true,
      "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" => true,
      "application/vnd.apple.pages" => true,
      "application/vnd.apple.numbers" => true,
      "application/vnd.apple.keynote" => true,
      "application/x-iwork-pages-sffpages" => true,
      "application/x-iwork-numbers-sffnumbers" => true,
      "application/x-iwork-keynote-sffkey" => true,
    );
  }

  static protected function init_EDAM_SEARCH_QUERY_LEN_MIN() {
    return 0;
  }

  static protected function init_EDAM_SEARCH_QUERY_LEN_MAX() {
    return 1024;
  }

  static protected function init_EDAM_SEARCH_QUERY_REGEX() {
    return "^[^\\p{Cc}\\p{Zl}\\p{Zp}]{0,1024}\$";
  }

  static protected function init_EDAM_HASH_LEN() {
    return 16;
  }

  static protected function init_EDAM_USER_USERNAME_LEN_MIN() {
    return 1;
  }

  static protected function init_EDAM_USER_USERNAME_LEN_MAX() {
    return 64;
  }

  static protected function init_EDAM_USER_USERNAME_REGEX() {
    return "^[a-z0-9]([a-z0-9_-]{0,62}[a-z0-9])?\$";
  }

  static protected function init_EDAM_USER_NAME_LEN_MIN() {
    return 1;
  }

  static protected function init_EDAM_USER_NAME_LEN_MAX() {
    return 255;
  }

  static protected function init_EDAM_USER_NAME_REGEX() {
    return "^[^\\p{Cc}\\p{Zl}\\p{Zp}]{1,255}\$";
  }

  static protected function init_EDAM_TAG_NAME_LEN_MIN() {
    return 1;
  }

  static protected function init_EDAM_TAG_NAME_LEN_MAX() {
    return 100;
  }

  static protected function init_EDAM_TAG_NAME_REGEX() {
    return "^[^,\\p{Cc}\\p{Z}]([^,\\p{Cc}\\p{Zl}\\p{Zp}]{0,98}[^,\\p{Cc}\\p{Z}])?\$";
  }

  static protected function init_EDAM_NOTE_TITLE_LEN_MIN() {
    return 1;
  }

  static protected function init_EDAM_NOTE_TITLE_LEN_MAX() {
    return 255;
  }

  static protected function init_EDAM_NOTE_TITLE_REGEX() {
    return "^[^\\p{Cc}\\p{Z}]([^\\p{Cc}\\p{Zl}\\p{Zp}]{0,253}[^\\p{Cc}\\p{Z}])?\$";
  }

  static protected function init_EDAM_NOTE_CONTENT_LEN_MIN() {
    return 0;
  }

  static protected function init_EDAM_NOTE_CONTENT_LEN_MAX() {
    return 5242880;
  }

  static protected function init_EDAM_APPLICATIONDATA_NAME_LEN_MIN() {
    return 3;
  }

  static protected function init_EDAM_APPLICATIONDATA_NAME_LEN_MAX() {
    return 32;
  }

  static protected function init_EDAM_APPLICATIONDATA_VALUE_LEN_MIN() {
    return 0;
  }

  static protected function init_EDAM_APPLICATIONDATA_VALUE_LEN_MAX() {
    return 4092;
  }

  static protected function init_EDAM_APPLICATIONDATA_ENTRY_LEN_MAX() {
    return 4095;
  }

  static protected function init_EDAM_APPLICATIONDATA_NAME_REGEX() {
    return "^[A-Za-z0-9_.-]{3,32}\$";
  }

  static protected function init_EDAM_APPLICATIONDATA_VALUE_REGEX() {
    return "^[^\\p{Cc}]{0,4092}\$";
  }

  static protected function init_EDAM_NOTEBOOK_NAME_LEN_MIN() {
    return 1;
  }

  static protected function init_EDAM_NOTEBOOK_NAME_LEN_MAX() {
    return 100;
  }

  static protected function init_EDAM_NOTEBOOK_NAME_REGEX() {
    return "^[^\\p{Cc}\\p{Z}]([^\\p{Cc}\\p{Zl}\\p{Zp}]{0,98}[^\\p{Cc}\\p{Z}])?\$";
  }

  static protected function init_EDAM_NOTEBOOK_STACK_LEN_MIN() {
    return 1;
  }

  static protected function init_EDAM_NOTEBOOK_STACK_LEN_MAX() {
    return 100;
  }

  static protected function init_EDAM_NOTEBOOK_STACK_REGEX() {
    return "^[^\\p{Cc}\\p{Z}]([^\\p{Cc}\\p{Zl}\\p{Zp}]{0,98}[^\\p{Cc}\\p{Z}])?\$";
  }

  static protected function init_EDAM_PUBLISHING_URI_LEN_MIN() {
    return 1;
  }

  static protected function init_EDAM_PUBLISHING_URI_LEN_MAX() {
    return 255;
  }

  static protected function init_EDAM_PUBLISHING_URI_REGEX() {
    return "^[a-zA-Z0-9.~_+-]{1,255}\$";
  }

  static protected function init_EDAM_PUBLISHING_URI_PROHIBITED() {
    return array(
      ".." => true,
    );
  }

  static protected function init_EDAM_PUBLISHING_DESCRIPTION_LEN_MIN() {
    return 1;
  }

  static protected function init_EDAM_PUBLISHING_DESCRIPTION_LEN_MAX() {
    return 200;
  }

  static protected function init_EDAM_PUBLISHING_DESCRIPTION_REGEX() {
    return "^[^\\p{Cc}\\p{Z}]([^\\p{Cc}\\p{Zl}\\p{Zp}]{0,198}[^\\p{Cc}\\p{Z}])?\$";
  }

  static protected function init_EDAM_SAVED_SEARCH_NAME_LEN_MIN() {
    return 1;
  }

  static protected function init_EDAM_SAVED_SEARCH_NAME_LEN_MAX() {
    return 100;
  }

  static protected function init_EDAM_SAVED_SEARCH_NAME_REGEX() {
    return "^[^\\p{Cc}\\p{Z}]([^\\p{Cc}\\p{Zl}\\p{Zp}]{0,98}[^\\p{Cc}\\p{Z}])?\$";
  }

  static protected function init_EDAM_USER_PASSWORD_LEN_MIN() {
    return 6;
  }

  static protected function init_EDAM_USER_PASSWORD_LEN_MAX() {
    return 64;
  }

  static protected function init_EDAM_USER_PASSWORD_REGEX() {
    return "^[A-Za-z0-9!#\$%&'()*+,./:;<=>?@^_`{|}~\\[\\]\\\\-]{6,64}\$";
  }

  static protected function init_EDAM_BUSINESS_URI_LEN_MAX() {
    return 32;
  }

  static protected function init_EDAM_NOTE_TAGS_MAX() {
    return 100;
  }

  static protected function init_EDAM_NOTE_RESOURCES_MAX() {
    return 1000;
  }

  static protected function init_EDAM_USER_TAGS_MAX() {
    return 100000;
  }

  static protected function init_EDAM_BUSINESS_TAGS_MAX() {
    return 100000;
  }

  static protected function init_EDAM_USER_SAVED_SEARCHES_MAX() {
    return 100;
  }

  static protected function init_EDAM_USER_NOTES_MAX() {
    return 100000;
  }

  static protected function init_EDAM_BUSINESS_NOTES_MAX() {
    return 500000;
  }

  static protected function init_EDAM_USER_NOTEBOOKS_MAX() {
    return 250;
  }

  static protected function init_EDAM_BUSINESS_NOTEBOOKS_MAX() {
    return 5000;
  }

  static protected function init_EDAM_USER_RECENT_MAILED_ADDRESSES_MAX() {
    return 10;
  }

  static protected function init_EDAM_USER_MAIL_LIMIT_DAILY_FREE() {
    return 50;
  }

  static protected function init_EDAM_USER_MAIL_LIMIT_DAILY_PREMIUM() {
    return 200;
  }

  static protected function init_EDAM_USER_UPLOAD_LIMIT_FREE() {
    return 62914560;
  }

  static protected function init_EDAM_USER_UPLOAD_LIMIT_PREMIUM() {
    return 1073741824;
  }

  static protected function init_EDAM_USER_UPLOAD_LIMIT_BUSINESS() {
    return 2147483647;
  }

  static protected function init_EDAM_NOTE_SIZE_MAX_FREE() {
    return 26214400;
  }

  static protected function init_EDAM_NOTE_SIZE_MAX_PREMIUM() {
    return 104857600;
  }

  static protected function init_EDAM_RESOURCE_SIZE_MAX_FREE() {
    return 26214400;
  }

  static protected function init_EDAM_RESOURCE_SIZE_MAX_PREMIUM() {
    return 104857600;
  }

  static protected function init_EDAM_USER_LINKED_NOTEBOOK_MAX() {
    return 100;
  }

  static protected function init_EDAM_USER_LINKED_NOTEBOOK_MAX_PREMIUM() {
    return 250;
  }

  static protected function init_EDAM_NOTEBOOK_SHARED_NOTEBOOK_MAX() {
    return 250;
  }

  static protected function init_EDAM_NOTE_CONTENT_CLASS_LEN_MIN() {
    return 3;
  }

  static protected function init_EDAM_NOTE_CONTENT_CLASS_LEN_MAX() {
    return 32;
  }

  static protected function init_EDAM_NOTE_CONTENT_CLASS_REGEX() {
    return "^[A-Za-z0-9_.-]{3,32}\$";
  }

  static protected function init_EDAM_HELLO_APP_CONTENT_CLASS_PREFIX() {
    return "evernote.hello.";
  }

  static protected function init_EDAM_FOOD_APP_CONTENT_CLASS_PREFIX() {
    return "evernote.food.";
  }

  static protected function init_EDAM_CONTENT_CLASS_HELLO_ENCOUNTER() {
    return "evernote.hello.encounter";
  }

  static protected function init_EDAM_CONTENT_CLASS_HELLO_PROFILE() {
    return "evernote.hello.profile";
  }

  static protected function init_EDAM_CONTENT_CLASS_FOOD_MEAL() {
    return "evernote.food.meal";
  }

  static protected function init_EDAM_CONTENT_CLASS_SKITCH_PREFIX() {
    return "evernote.skitch";
  }

  static protected function init_EDAM_CONTENT_CLASS_SKITCH() {
    return "evernote.skitch";
  }

  static protected function init_EDAM_CONTENT_CLASS_SKITCH_PDF() {
    return "evernote.skitch.pdf";
  }

  static protected function init_EDAM_CONTENT_CLASS_PENULTIMATE_PREFIX() {
    return "evernote.penultimate.";
  }

  static protected function init_EDAM_CONTENT_CLASS_PENULTIMATE_NOTEBOOK() {
    return "evernote.penultimate.notebook";
  }

  static protected function init_EDAM_RELATED_PLAINTEXT_LEN_MIN() {
    return 1;
  }

  static protected function init_EDAM_RELATED_PLAINTEXT_LEN_MAX() {
    return 131072;
  }

  static protected function init_EDAM_RELATED_MAX_NOTES() {
    return 25;
  }

  static protected function init_EDAM_RELATED_MAX_NOTEBOOKS() {
    return 1;
  }

  static protected function init_EDAM_RELATED_MAX_TAGS() {
    return 25;
  }

  static protected function init_EDAM_BUSINESS_NOTEBOOK_DESCRIPTION_LEN_MIN() {
    return 1;
  }

  static protected function init_EDAM_BUSINESS_NOTEBOOK_DESCRIPTION_LEN_MAX() {
    return 200;
  }

  static protected function init_EDAM_BUSINESS_NOTEBOOK_DESCRIPTION_REGEX() {
    return "^[^\\p{Cc}\\p{Z}]([^\\p{Cc}\\p{Zl}\\p{Zp}]{0,198}[^\\p{Cc}\\p{Z}])?\$";
  }

  static protected function init_EDAM_BUSINESS_PHONE_NUMBER_LEN_MAX() {
    return 20;
  }

  static protected function init_EDAM_PREFERENCE_NAME_LEN_MIN() {
    return 3;
  }

  static protected function init_EDAM_PREFERENCE_NAME_LEN_MAX() {
    return 32;
  }

  static protected function init_EDAM_PREFERENCE_VALUE_LEN_MIN() {
    return 1;
  }

  static protected function init_EDAM_PREFERENCE_VALUE_LEN_MAX() {
    return 1024;
  }

  static protected function init_EDAM_MAX_PREFERENCES() {
    return 100;
  }

  static protected function init_EDAM_MAX_VALUES_PER_PREFERENCE() {
    return 256;
  }

  static protected function init_EDAM_PREFERENCE_NAME_REGEX() {
    return "^[A-Za-z0-9_.-]{3,32}\$";
  }

  static protected function init_EDAM_PREFERENCE_VALUE_REGEX() {
    return "^[^\\p{Cc}]{1,1024}\$";
  }

  static protected function init_EDAM_PREFERENCE_SHORTCUTS() {
    return "evernote.shortcuts";
  }

  static protected function init_EDAM_PREFERENCE_SHORTCUTS_MAX_VALUES() {
    return 250;
  }

  static protected function init_EDAM_DEVICE_ID_LEN_MAX() {
    return 32;
  }

  static protected function init_EDAM_DEVICE_ID_REGEX() {
    return "^[^\\p{Cc}]{1,32}\$";
  }

  static protected function init_EDAM_DEVICE_DESCRIPTION_LEN_MAX() {
    return 64;
  }

  static protected function init_EDAM_DEVICE_DESCRIPTION_REGEX() {
    return "^[^\\p{Cc}]{1,64}\$";
  }

  static protected function init_EDAM_SEARCH_SUGGESTIONS_MAX() {
    return 10;
  }

  static protected function init_EDAM_SEARCH_SUGGESTIONS_PREFIX_LEN_MAX() {
    return 1024;
  }

  static protected function init_EDAM_SEARCH_SUGGESTIONS_PREFIX_LEN_MIN() {
    return 2;
  }
}

