@extends('emails.layout')

@section('title', 'New Inquiry')

@section('content')
    <p style="font-size: 18px; margin-bottom: 20px;">You've received a new strategic inquiry via your portfolio.</p>

    <table class="info-table">
        <tr>
            <td class="info-label">Name</td>
            <td class="info-value">{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td class="info-label">Email</td>
            <td class="info-value">{{ $data['email'] }}</td>
        </tr>
        <tr>
            <td class="info-label">Phone</td>
            <td class="info-value">{{ $data['phone'] }}</td>
        </tr>
        <tr>
            <td class="info-label">Subject</td>
            <td class="info-value">{{ $data['subject'] }}</td>
        </tr>
    </table>

    <p class="info-label">Project Brief / Message:</p>
    <div class="message-box">
        "{{ $data['msg'] }}"
    </div>

    <div style="text-align: center; margin-top: 30px;">
        <a href="mailto:{{ $data['email'] }}" class="button">Reply to Client</a>
    </div>
@endsection
