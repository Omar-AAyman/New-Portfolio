@extends('emails.layout')

@section('title', 'New Inquiry')

@section('content')
    <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="font-size: 20px; font-weight: 600; color: #fff; margin-bottom: 5px;">New Portfolio Inquiry</h2>
        <span
            style="background: rgba(190, 42, 45, 0.2); color: #BE2A2D; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; border: 1px solid rgba(190, 42, 45, 0.3);">Action
            Required</span>
    </div>

    <div class="data-card">
        <div class="data-row">
            <span class="data-label">Sender Name</span>
            <span class="data-value">{{ $data['name'] }}</span>
        </div>
        <div class="data-row">
            <span class="data-label">Email Address</span>
            <span class="data-value"><a href="mailto:{{ $data['email'] }}"
                    style="color: #fff; text-decoration: none;">{{ $data['email'] }}</a></span>
        </div>
        <div class="data-row">
            <span class="data-label">Phone Number</span>
            <span class="data-value">{{ $data['phone'] }}</span>
        </div>
        <div class="data-row">
            <span class="data-label">Subject</span>
            <span class="data-value">{{ $data['subject'] }}</span>
        </div>
    </div>

    <p
        style="color: #888; font-size: 13px; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">
        Message Content</p>
    <div style="background: #222; padding: 20px; border-radius: 8px; color: #ddd; border-left: 3px solid #BE2A2D;">
        "{{ $data['msg'] }}"
    </div>

    <div style="text-align: center; margin-top: 35px;">
        <a href="mailto:{{ $data['email'] }}" class="button">Reply to Lead</a>
    </div>
@endsection
