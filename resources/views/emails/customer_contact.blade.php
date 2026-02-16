@extends('emails.layout')

@section('title', __('Thank You'))

@section('content')
    <p style="font-size: 18px; margin-bottom: 20px;">
        {{ __('Hi There!') }} {{ $data['name'] }},
    </p>

    <p style="line-height: 1.8; color: #ccc;">
        {{ __('Thank you for reaching out. I appreciate your interest and will review your message as soon as possible. You can expect a response from me shortly.') }}
    </p>

    <div style="background-color: #252525; padding: 20px; border-radius: 8px; margin-top: 30px; border: 1px solid #333;">
        <p style="margin-top: 0; color: #BE2A2D; font-weight: bold;">{{ __('Your Message Summary:') }}</p>
        <p style="margin-bottom: 5px; color: #aaa;"><span style="color: #888;">{{ __('Subject') }}:</span>
            {{ $data['subject'] }}</p>
        <div style="color: #ddd; font-style: italic; margin-top: 10px; padding-left: 15px; border-left: 2px solid #444;">
            "{{ $data['msg'] }}"
        </div>
    </div>

    <div style="text-align: center; margin-top: 40px;">
        <p style="color: #888; font-size: 14px; margin-bottom: 15px;">{{ __('Need immediate assistance?') }}</p>
        <a href="https://wa.me/201149685494" class="button"
            style="background-color: #25d366; color: #fff;">{{ __('WhatsApp Me') }}</a>
    </div>
@endsection
