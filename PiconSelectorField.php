<?php
/**
 * This file is part of BoltPiconSelector Bolt CMS Extension.
 * 
 * BoltPiconSelector Bolt CMS Extension is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * BoltPiconSelector Bolt CMS Extension is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see 
 * <http://www.gnu.org/licenses/>.
 *
 * @author Johnathan Pulos <johnathan@missionaldigerati.org>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * 
 */

namespace Bolt\Extension\MissionalDigerati\BoltPiconSelector;

use Bolt\Field\FieldInterface;

class PiconSelectorField implements FieldInterface
{

  /**
   * undocumented class variable
   *
   * @var string
   **/
  public $picons = ["abacus", "add", "airplay", "alert", "alert-2", "alert-error", "alert-error-2", "anchor", "animal-foot", "answer", "archive", "arrow-left", "arrow-right", "arrows", "arrows-2", "arrows-3", "arrows-4", "arrows-5", "article", "attachment", "award", "backup", "badge", "badge-2", "bag", "bag-2", "ball", "bandage", "basket", "basket-2", "battery", "battery-2", "battery-3", "battery-4", "battery-5", "battery-6", "bicycle", "bicycle-chain", "bill", "binary", "bomb", "book", "book-shelf", "book-shelf-2", "bookmark", "bookmark-2", "bowling", "box", "box-archive", "box-export", "box-import", "brain", "brain-2", "broken-heart", "brush", "brush-2", "bubble-cloud", "bubble-cloud-2", "bubble-comment", "bug", "building", "building-2", "bulb", "bulb-2", "bulb-3", "bus", "business-man", "calculator", "calculator-2", "calendar", "calendar-2", "candle", "car", "car-steering", "cards", "cart", "cart-2", "cart-3", "casette", "cd", "chain", "chart", "chart-2", "chart-3", "chart-4", "chart-5", "chart-6", "chart-7", "chart-8", "chart-9", "chat", "check", "checked", "checked-2", "clock", "clock3", "clock-2", "close", "closed-store", "cloud", "cloud-backup", "cloud-error", "cloud-rain", "cloud-synce", "cocktail", "coffee", "coins", "color", "comment", "comment-2", "compass", "compose", "computer", "computer-2", "cone", "configuration", "configuration-2", "contract", "cooking", "couch", "cpu", "credit-card", "crop", "crown", "cv", "cv3", "cv-2", "dangerous", "database", "database-2", "database-3", "date", "date-2", "decoration", "delivery", "desktop", "desktop-cloud", "desktop-preferences", "desktop-security", "desktop-users", "diagram", "diagram-2", "diamond", "directions", "directions-2", "disc", "discount", "doc", "dock", "document", "document-settings", "documents-box", "dollar", "dollar-2", "dollars-euro", "dont-touch", "dont-touch-2", "download", "download-2", "download-3", "download-cloud", "download-drive", "drawing", "drink", "drop", "dropdown", "drums", "earth", "education", "envelope", "error", "euro", "export", "eye", "eye-dropper", "factory", "favorite", "feather", "file", "file-photo", "find", "fingerprint", "fire", "fire-estinguisher", "firewall", "flag", "flashlight", "flight", "flower", "folder", "folder-2", "folder-backup", "folder-documents", "folder-locked", "folder-photos", "folder-preferences", "folder-schedule", "folder-upload", "font", "free", "fuel", "full-documents", "funnel", "gamepad", "garbage", "garbage-2", "gauge", "gauge-2", "gauge-3", "gift", "glasses", "hamburger", "hammer", "heart", "heart-add", "holiday", "home", "home-2", "house", "id", "id-2", "image", "image-2", "image-3", "image-4", "image-5", "image-6", "image-7", "image-8", "image-9", "image-10", "import", "information", "ipad", "iphone", "ipod", "ipod-2", "keyboard", "keyboard-2", "keyboard-3", "keyboard-4", "lab", "language", "laptop-download", "laptop-statistics", "laptop-user", "laptop-web", "law", "law-2", "layers", "leaf", "leaf-2", "light", "like", "list", "list-bullets", "list-check", "list-favorites", "list-grid", "list-radio", "list-select", "list-thumbs", "location", "location-map", "lock", "lock-2", "lock-3", "lock-4", "logout", "magnet", "manual", "maximize", "medal", "medal-2", "medicine", "megaphone", "microphone", "microphone-2", "milk", "minus-down", "mobile-call", "mobile-chat", "mobile-payment", "mobile-phone", "mobile-ring", "mobile-sms", "molecular", "money", "moon", "mouse", "mouse-2", "moustache", "move", "music", "music-2", "music-3", "music-4", "music-5", "needle", "network", "network-2", "network-3", "new", "new-badge", "news", "next", "notebook", "notebook-2", "nuclear", "offee-2", "open-24-7", "open-box", "open-store", "package", "package-2", "paper", "paper-2", "paper-shredder", "paperclip", "password", "pds", "pencil", "pencil-ruler", "petition", "phone-book", "phone-book-2", "phone-book-3", "phone-book-4", "phone-book-5", "picnic", "pin", "pin-2", "pin-3", "pin-4", "plane", "plant", "plug", "plus-up", "postcard", "power", "preferences", "preferences-2", "presentation", "previous", "printer", "profile", "profile-2", "pulse", "puzzle", "question", "quote", "radio", "read", "recording", "recycle", "recycle-bin", "register", "remote", "remove", "remove-2", "repeat", "resize", "restaurant", "ringer", "ringer-mute", "road", "rocket", "rotate", "rotate-left", "rotate-lock", "rotate-right", "ruler", "safe", "savings", "scissors", "search", "search3", "search-2", "sent", "server", "settings", "settings-2", "shield", "ship", "shopping", "shuffle", "signing", "sim-card", "smiley-happy", "smiley-neutral", "smiley-sad", "snow", "socket", "speaker", "star", "star-2", "star-add", "step", "store", "store-2", "suitcase", "suitcase-2", "suitcase-3", "suitcase-secure", "sun", "support", "support-2", "support-3", "surveillance", "switch-off", "switch-on", "sync", "table", "tag", "tag-2", "tag-price", "target", "telephone", "telephone-2", "telephone-3", "telephone-busy", "telephone-call", "temperature", "temperature-2", "thumbs-down", "thumbs-up", "thunderbolt-connect", "ticket", "tie", "time", "time3", "time-2", "tools", "traffic-light", "train", "tree", "tree-2", "truck", "tshirt", "tv", "twitter", "umbrella", "unavailable", "undo", "upload", "upload-2", "upload-cloud", "url", "usb", "usb-connect", "user", "user-2", "user-3", "user-add", "user-boy", "user-chat", "user-female", "user-password", "user-remove", "user-tag", "users", "users-2", "vector", "vehicle", "video", "video-2", "video-3", "video-4", "video-5", "video-6", "vinyl", "volume", "volume-2", "volume-3", "volume-4", "wallet", "wallet-2", "webcam", "wifi", "wifi-2", "window", "window-alert", "window-command", "window-cursor", "window-error", "window-layout", "window-layout-2", "window-layout-3", "window-layout-4", "window-settings", "wine", "winner", "wireless", "write", "writing", "writing-2", "youtube", "zip", "zoom-in", "zoom-out"];

  /**
   * Get the name of the field
   *
   * @return string the field name
   * @author Johnathan Pulos <johnathan@missionaldigerati.org>
   **/
  public function getName()
  {
    return 'picon_selector';
  }

  /**
   * Get the template to load for the field
   *
   * @return string the template name
   * @author Johnathan Pulos <johnathan@missionaldigerati.org>
   **/
  public function getTemplate()
  {
    return '_picon_selector.twig';
  }

  /**
   * Get the type of column you want to store this field as
   *
   * @return string The type of field
   * @author Johnathan Pulos <johnathan@missionaldigerati.org>
   **/
  public function getStorageType()
  {
    return 'text';
  }

  /**
   * Get any storage options for the field
   *
   * @return array An array of options
   * @author Johnathan Pulos <johnathan@missionaldigerati.org>
   **/
  public function getStorageOptions()
  {
    return array('default'  =>  '');
  }

}
