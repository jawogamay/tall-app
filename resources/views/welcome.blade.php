<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
        <style>
            .chat-notification {
              display: flex;
              max-width: 24rem;
              margin: 0 auto;
              padding: 1.5rem;
              border-radius: 0.5rem;
              background-color: #fff;
              box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }
            .chat-notification-logo-wrapper {
              flex-shrink: 0;
            }
            .chat-notification-logo {
              height: 3rem;
              width: 3rem;
            }
            .chat-notification-content {
              margin-left: 1.5rem;
              padding-top: 0.25rem;
            }
            .chat-notification-title {
              color: #1a202c;
              font-size: 1.25rem;
              line-height: 1.25;
            }
            .chat-notification-message {
              color: #718096;
              font-size: 1rem;
              line-height: 1.5;
            }
          </style>
    </head>
    <body>

        {{-- This is traditional Way --}}
        <div class="chat-notification">
            <div class="chat-notification-logo-wrapper">
              <img class="chat-notification-logo" src="/logo.png" alt="ChitChat Logo">
            </div>
            <div class="chat-notification-content">
              <h4 class="chat-notification-title">ChitChat</h4>
              <p class="chat-notification-message">You have a new message!</p>
            </div>
          </div>


        {{-- This is the tailwind way --}}
        {{-- <div class="mt-4 p-6 max-w-sm mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4">
            <div class="shrink-0">
              <img class="h-12 w-12" src="/logo.png" alt="ChitChat Logo">
            </div>
            <div>
              <div class="text-xl font-medium text-black">ChitChat</div>
              <p class="text-slate-500">You have a new message!</p>
            </div>
          </div> --}}

    </body>
</html>
