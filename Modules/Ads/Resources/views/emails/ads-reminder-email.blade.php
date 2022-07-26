@extends('ads::emails.EmailBaseComponent')

@section('emailBody')

    <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">

        <tr>
            <td valign="middle" class="hero bg_white" style="padding: 2em 0 4em 0;">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">

                    <tr>
                        <td style="text-align: center; padding: 0 2.5em 3em;">
                            <div class="text">

                                <h3> New Reminder for your upcoming Ads </h3>

                                <div style="color: black">
                                    Title: {{ $ad?->title }}
                                </div>

                                <div style="color: black">
                                    Description: {{ $ad?->description }}
                                </div>

                                <div style="color: black">
                                    Type: {{ $ad?->type }}
                                </div>

                            </div>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
        <!-- end tr -->

    </table>

@endsection
