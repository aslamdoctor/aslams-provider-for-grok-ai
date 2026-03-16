# Contributing to Third-Party Provider for Grok

Thank you for your interest in contributing! Here's how you can help.

## Reporting Issues

Before opening an issue, please search [existing issues](https://github.com/aslamdoctor/aslams-provider-for-grok-ai/issues) to avoid duplicates.

When reporting a bug, include:
- WordPress version
- PHP version
- WP AI Client plugin version
- Steps to reproduce
- Expected vs actual behavior

## Development Setup

1. Clone the repository into your WordPress plugins directory:
   ```bash
   cd wp-content/plugins/
   git clone https://github.com/aslamdoctor/aslams-provider-for-grok-ai.git
   ```

2. Ensure the [WP AI Client](https://github.com/WordPress/wp-ai-client) plugin is installed and activated.

3. Add your Grok API key at **Settings > AI Credentials** in the WordPress admin.

## Submitting a Pull Request

1. Fork the repository and create a branch from `master`:
   ```bash
   git checkout -b feature/your-feature-name
   ```

2. Make your changes, following the guidelines below.

3. Test your changes in a local WordPress environment.

4. Push your branch and open a pull request against `master`.

5. Describe what your PR does and link any related issues.

## Coding Guidelines

- Follow the [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/) for PHP.
- Use tabs for indentation (WordPress standard).
- Keep changes focused — one feature or fix per PR.
- Add PHPDoc comments for new classes and public methods.
- Maintain backward compatibility with PHP 7.4.

## Plugin Architecture

```
├── aslams-provider-for-grok-ai.php   # Main plugin file
├── src/
│   ├── autoload.php                   # PSR-4 autoloader
│   ├── Models/
│   │   ├── GrokTextGenerationModel.php
│   │   └── GrokImageGenerationModel.php
│   └── Provider/
│       └── GrokProvider.php           # Provider registration & API calls
├── assets/                            # WordPress.org plugin assets
└── readme.txt                         # WordPress.org readme
```

## What to Contribute

- Bug fixes
- New Grok model support
- Improved error handling
- Documentation improvements
- WordPress compatibility updates

## License

By contributing, you agree that your contributions will be licensed under the [GPL-3.0-or-later](LICENSE) license.
