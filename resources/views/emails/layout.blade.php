<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Omar Ayman')</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0b0b0b;
            color: #e0e0e0;
            -webkit-font-smoothing: antialiased;
        }

        .wrapper {
            width: 100%;
            background-color: #0b0b0b;
            padding: 40px 0;
        }

        .main {
            background-color: #161616;
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            border-spacing: 0;
            color: #e0e0e0;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            border: 1px solid #2a2a2a;
        }

        .header {
            background-color: #1a1a1a;
            padding: 30px 40px;
            text-align: center;
            border-bottom: 1px solid #333;
        }

        .header img {
            max-height: 60px;
        }

        .content {
            padding: 40px;
        }

        .footer {
            background-color: #111;
            padding: 30px;
            text-align: center;
            color: #666;
            font-size: 13px;
            border-top: 1px solid #222;
        }

        .footer a {
            color: #888;
            text-decoration: none;
            margin: 0 8px;
        }

        .button {
            display: inline-block;
            background-color: #BE2A2D;
            color: #ffffff;
            padding: 14px 32px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            margin-top: 25px;
            font-size: 15px;
            transition: background 0.3s ease;
        }

        .button:hover {
            background-color: #d63033;
        }

        h1,
        h2,
        h3 {
            color: #ffffff;
            margin-top: 0;
        }

        p {
            line-height: 1.6;
            color: #cccccc;
            margin-bottom: 20px;
        }

        .highlight {
            color: #BE2A2D;
            font-weight: bold;
        }

        /* Data Card Styles */
        .data-card {
            background: #202020;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
            border: 1px solid #333;
        }

        .data-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #333;
        }

        .data-row:last-child {
            border-bottom: none;
        }

        .data-label {
            color: #888;
            font-size: 14px;
        }

        .data-value {
            color: #fff;
            font-weight: 500;
            text-align: right;
        }

        [dir="rtl"] .data-value {
            text-align: left;
        }

        /* Mobile Responsiveness */
        @media only screen and (max-width: 600px) {
            .wrapper {
                padding: 10px 0 !important;
            }

            .main {
                width: 100% !important;
                border-radius: 0 !important;
                border: none !important;
            }

            .header {
                padding: 25px 20px !important;
            }

            .content {
                padding: 25px 20px !important;
            }

            .footer {
                padding: 30px 20px !important;
            }

            .data-row {
                flex-direction: column !important;
                align-items: flex-start !important;
            }

            .data-label {
                margin-bottom: 4px !important;
            }

            .data-value {
                text-align: left !important;
            }

            [dir="rtl"] .data-value {
                text-align: right !important;
            }

            .button {
                display: block !important;
                width: 100% !important;
                box-sizing: border-box !important;
                text-align: center !important;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <table class="main">
            <tr>
                <td class="header">
                    <img src="{{ $message->embed(public_path('assets/img/omar-ayman-logo.png')) }}" alt="Omar Ayman"
                        style="height: 50px;">
                </td>
            </tr>
            <tr>
                <td class="content">
                    @yield('content')
                </td>
            </tr>
            <tr>
                <td class="footer">
                    <p style="margin-bottom: 10px;">&copy; {{ date('Y') }} Omar Ayman. All rights reserved.</p>
                    <p style="margin-bottom: 15px;">SaaS Architecture • Fintech Solutions • Scalable Systems</p>
                    <div>
                        <a href="https://linkedin.com/in/omaraymn">LinkedIn</a> •
                        <a href="https://github.com/Omar-AAyman">GitHub</a> •
                        <a href="{{ route('home') }}">Portfolio</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
