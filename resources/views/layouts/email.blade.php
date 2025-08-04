<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    
    <style>
        /* Reset styles */
        body, table, td, p, a, li, blockquote {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        
        table, td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        
        img {
            -ms-interpolation-mode: bicubic;
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }
        
        /* Email styles */
        body {
            margin: 0 !important;
            padding: 0 !important;
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
        }
        
        .email-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 30px 20px;
            text-align: center;
        }
        
        .email-header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 28px;
            font-weight: 600;
        }
        
        .email-body {
            padding: 40px 30px;
        }
        
        .email-footer {
            background-color: #f8f9fa;
            padding: 30px 20px;
            text-align: center;
            border-top: 1px solid #e9ecef;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #007bff;
            color: #ffffff !important;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            margin: 20px 0;
        }
        
        .btn:hover {
            background-color: #0056b3;
        }
        
        .btn-success {
            background-color: #28a745;
        }
        
        .btn-success:hover {
            background-color: #1e7e34;
        }
        
        .btn-warning {
            background-color: #ffc107;
            color: #212529 !important;
        }
        
        .btn-warning:hover {
            background-color: #e0a800;
        }
        
        .alert {
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }
        
        .alert-info {
            background-color: #d1ecf1;
            border: 1px solid #bee5eb;
            color: #0c5460;
        }
        
        .alert-success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }
        
        .alert-warning {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            color: #856404;
        }
        
        .text-muted {
            color: #6c757d;
        }
        
        .text-center {
            text-align: center;
        }
        
        .mb-3 {
            margin-bottom: 1rem;
        }
        
        .mt-3 {
            margin-top: 1rem;
        }
        
        /* Responsive */
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
            }
            
            .email-body {
                padding: 20px !important;
            }
            
            .email-header h1 {
                font-size: 24px !important;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>@yield('header', config('app.name'))</h1>
        </div>
        
        <!-- Body -->
        <div class="email-body">
            @yield('content')
        </div>
        
        <!-- Footer -->
        <div class="email-footer">
            <p class="text-muted mb-3">
                {{ __('Cet email a été envoyé depuis') }} <strong>{{ config('app.name') }}</strong>
            </p>
            <p class="text-muted mb-3">
                {{ __('Si vous avez des questions, contactez-nous à') }} 
                <a href="mailto:{{ config('mail.support_email', 'support@example.com') }}">
                    {{ config('mail.support_email', 'support@example.com') }}
                </a>
            </p>
            <p class="text-muted">
                &copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('Tous droits réservés.') }}
            </p>
        </div>
    </div>
</body>
</html>
