@extends('emails.layout')

@section('title', __('Thank You'))

@section('content')
    <p style="font-size: 18px; color: #fff; font-weight: 600; margin-bottom: 15px;">
        {{ __('Hi There!') }} <span class="highlight">{{ $data['name'] }}</span>,
    </p>

    <p>{{ __('Thank you for getting in touch. I have received your message and will review it shortly.') }}</p>
    <p>{{ __('I typically respond within 24 hours. Below is a copy of your inquiry for your records:') }}</p>

    <div class="data-card" style="margin-top: 25px;">
        <div class="data-row">
            <span class="data-label">{{ __('Subject') }}</span>
            <span class="data-value">{{ $data['subject'] }}</span>
        </div>
        <div style="padding-top: 15px; color: #ccc; font-style: italic; line-height: 1.6;">
            "{{ $data['msg'] }}"
        </div>
    </div>

    <div style="text-align: center; margin-top: 40px; border-top: 1px solid #222; padding-top: 30px;">
        <p style="color: #888; font-size: 13px; margin-bottom: 15px;">{{ __('Need a faster response?') }}</p>
        <a href="https://wa.me/201149685494" class="button" style="background-color: #25d366; margin-top: 0;">
            {{ __('Chat on WhatsApp') }}
        </a>
    </div>
@endsection
