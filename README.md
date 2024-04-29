<h1 align="center"> Raze Reload</h1> <br>
<h1 align="center">

<img src="https://i.postimg.cc/LshKv9wP/raze-red-logo.png" width="100px" height="100px">

</h1>

### Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Installation](#installation)
- [How it works](#how-it-works)
- [Contributing](#contributing)
- [License](#license)
- [About](#about)
- [Contact](#contact)

## Overview

Raze Reload is a Laravel package designed to seamlessly integrate with the **_Ribedo Raze Desktop Application_**, enhancing your Laravel development workflow by enabling live reloading whenever you make changes to your application's codebase. Say goodbye to manual browser refreshes and streamline your development process with Raze Reload.

## Features

- Automatic live reloading of your Laravel application when code changes are detected.
- Simple integration with Ribedo Raze desktop app.
- Enhances development efficiency by eliminating the need for manual browser refreshes.

## Installation

To install Raze Reload, follow these simple steps:

1. Install the package via Composer:

   ```bash
   composer require ribedo/reload
   ```

2. Run `bash php artisan raze:init` or open your Ribedo Raze app and execute it in the Artisan page.

3. Add this Blade directives `@razeScript` in the end body tag in your template.

   **_Example_**

```html
<html>
  <head></head>
  <body>
    ... 
    @razeScript
  </body>
</html>
```

4. That's it! You're now ready to enjoy live reloading in your Laravel application with Raze Reload and Ribedo Raze Desktop Application.

## How it works

Using Raze Reload with Ribedo Raze Desktop application is straightforward. Once installed and configured, it automatically monitors your Laravel application's codebase for changes and triggers a live reload in the browser whenever a change is detected.

## Contributing

Contributions to Raze Reload are welcome! If you have suggestions for improvements or encounter any issues, please feel free to open an issue or submit a pull request on the [GitHub repository](https://github.com/Ribedo-Inc/reload).

## License

Raze Reload is open-source software licensed under the [MIT License](LICENSE.md). Feel free to use, modify, and distribute it according to your needs.

## About

Raze Reload is developed and maintained by [Ribedo Inc.](https://ribedo.org). It was created to enhance the development experience for Laravel developers using Ribedo Raze desktop application by providing seamless live reloading functionality.

## Contact

If you have any questions, suggestions, or feedback, you can reach out to us via email at `support@ribedo.org`.
