# Singpass Callback URL Plugin

**Contributors:** Khindol Madraimov  
**Plugin URI:** http://www.octopus8.com  
**Tags:** Singpass, REST API, CiviCRM, Callback  
**Requires at least:** 5.0  
**Tested up to:** 6.0  
**Stable tag:** 1.0.1  
**License:** GPLv2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html  

A WordPress plugin to expose a configurable REST API callback URL for Singpass. Designed to work with CiviCRM extensions by enabling customizable callback settings.

## Description

The Singpass Callback URL Plugin allows you to set up a REST API endpoint for Singpass callbacks. You can configure the endpoint address, CiviCRM extension, and function name used in the callback through an intuitive settings page in the WordPress admin dashboard.

### Features

- Register a custom REST API endpoint for Singpass.
- Configure the callback address, extension, and function name from the admin settings page.
- Ideal for integration with CiviCRM extensions, allowing flexible endpoint management.

## Installation

1. Download the plugin files.
2. Upload the plugin to the `/wp-content/plugins/` directory or install it through the WordPress Plugins menu.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Go to **Settings > Singpass Callback** to configure the API endpoint.

## Usage

1. **Navigate to Settings > Singpass Callback**: Configure the callback URL, including:
   - **Address**: REST route address (default: `singpass/v1`).
   - **Extension**: CiviCRM extension class name (default: `CRM_Singpass_Utils`).
   - **Function Name**: Callback function name (default: `callbackUrl`).
2. **API Endpoint**: Once configured, the endpoint will be available at `[address]/report`.

## Screenshots

1. **Settings Page**  
   Screenshot of the settings page where the address, extension, and function name can be configured.

## Frequently Asked Questions

### Can I change the endpoint address?
Yes, you can change the address in the **Settings > Singpass Callback** page.

### Which HTTP methods does the endpoint support?
Currently, only `GET` requests are supported for the `/report` endpoint.

## Changelog

### 1.0.1
- Initial release of the plugin with customizable callback options.

## Upgrade Notice

### 1.0.1
- Added an admin settings page for configuring the callback URL settings.

## License

This plugin is licensed under the GPLv2 or later.  
[License URI](https://www.gnu.org/licenses/gpl-2.0.html)

---

**Author:** Khindol Madraimov  
**Contact Email:** hindol@octopus8.com  
**Website:** [Octopus8](http://www.octopus8.com)
