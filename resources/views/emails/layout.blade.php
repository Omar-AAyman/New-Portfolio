<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0b0b0b;
            color: #ffffff;
        }

        .wrapper {
            width: 100%;
            table-layout: fixed;
            background-color: #0b0b0b;
            padding-bottom: 40px;
        }

        .main {
            background-color: #1a1a1a;
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            border-spacing: 0;
            color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #333;
        }

        .header {
            background-color: #111;
            padding: 40px;
            text-align: center;
            border-bottom: 2px solid #BE2A2D;
        }

        .header h1 {
            margin: 0;
            color: #BE2A2D;
            font-size: 24px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .content {
            padding: 40px;
        }

        .footer {
            background-color: #111;
            padding: 30px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }

        .button {
            display: inline-block;
            background-color: #BE2A2D;
            color: #000;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            margin-top: 20px;
            text-transform: uppercase;
            font-size: 14px;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .info-table td {
            padding: 12px 0;
            border-bottom: 1px solid #333;
        }

        .info-label {
            color: #BE2A2D;
            font-weight: bold;
            width: 30%;
        }

        .info-value {
            color: #ddd;
        }

        .message-box {
            background-color: #252525;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #BE2A2D;
            color: #ddd;
            font-style: italic;
            margin-top: 20px;
        }

        [dir="rtl"] .message-box {
            border-left: none;
            border-right: 4px solid #BE2A2D;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <table class="main">
            <tr>
                <td class="header">
                    <img src="{{ $message->embed(public_path('assets/img/omar-ayman-logo.png')) }}" alt="Omar Ayman Logo"
                        style="max-height: 80px; margin-bottom: 20px;">
                    <h1>@yield('title', 'Omar Ayman')</h1>
                </td>
            </tr>
            <tr>
                <td class="content">
                    @yield('content')
                </td>
            </tr>
            <tr>
                <td class="footer">
                    <p>&copy; {{ date('Y') }} Omar Ayman | Full-Stack Solutions Architect</p>
                    <p>{{ __('Cairo, Egypt') }}</p>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
