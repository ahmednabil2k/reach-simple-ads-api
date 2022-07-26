<table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="width:100%;max-width:100%;" >
    <!-- lotus-footer-4 -->
    <tr>
        <td align="center"  bgcolor="#ee4738" style="color: whitesmoke" class="container-padding">

            <!-- Content -->
            <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row" width="580" style="width:580px;max-width:580px;">
                <tr>
                    <td height="50" style="font-size:50px;line-height:50px;" >&nbsp;</td>
                </tr>

                <tr>
                    <td align="center">
                        <!-- Social Icons -->
                        <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="width:100%;max-width:100%;">
                            <tr>
                                <td align="center">
                                    <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation">
                                        <tr>

                                            <td   class="rwd-on-mobile" align="center" valign="middle" height="36" style="height: 36px;">
                                                @if( config('customConfig.weeDoFacebookUrl') != '')
                                                    <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation">
                                                        <tr>
                                                            <td width="5"></td>
                                                            <td align="center">
                                                                <a href="javascript:void(0)"><img style="width:36px;border:0px;display: inline!important;" src="{{ asset(config('customConfig.weeDoFacebookUrl')) }}" width="36" border="0" alt="icon" title="facebook"></a>
                                                            </td>
                                                            <td width="5"></td>
                                                        </tr>
                                                    </table>
                                                @endif
                                            </td>

                                            <td   class="rwd-on-mobile" align="center" valign="middle" height="36" style="height: 36px;">
                                                @if( config('customConfig.weeDoTwitterUrl') != '')
                                                    <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation">
                                                        <tr>
                                                            <td width="5"></td>
                                                            <td align="center">
                                                                <a href="javascript:void(0)"><img style="width:36px;border:0px;display: inline!important;" src="{{ asset(config('customConfig.weeDoTwitterUrl')) }}" width="36" border="0" alt="icon" title="twitter"></a>
                                                            </td>
                                                            <td width="5"></td>
                                                        </tr>
                                                    </table>
                                                @endif
                                            </td>

                                            <td   class="rwd-on-mobile" align="center" valign="middle" height="36" style="height: 36px;">
                                                @if( config('customConfig.weeDoInstagramUrl') != '')
                                                    <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation">
                                                        <tr>
                                                            <td width="5"></td>
                                                            <td align="center">
                                                                <a href="javascript:void(0)"><img style="width:36px;border:0px;display: inline!important;" src="{{ asset(config('customConfig.weeDoInstagramUrl')) }}" width="36" border="0" alt="icon" title="instgram"></a>
                                                            </td>
                                                            <td width="5"></td>
                                                        </tr>
                                                    </table>
                                                @endif
                                            </td>


                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <!-- Social Icons -->
                    </td>
                </tr>

                <tr>
                    <td height="30" style="font-size:30px;line-height:30px;" >&nbsp;</td>
                </tr>
                <tr  >
                    <td class="center-text"  align="center"
                        style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:white;text-decoration:none;letter-spacing:0px;">
                        <div  >
                            {!! config('customConfig.weeDoInfo')  !!}
                            <br>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td height="15" style="font-size:15px;line-height:15px;" >&nbsp;</td>
                </tr>
                <tr>
                    <td class="center-text"  align="center" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">

                        <a href="tel:{{ config('customConfig.weeDoSupportPhone')  }}"    style="color:white;">
                                        <span>
                                            {{ config('customConfig.weeDoSupportPhone')  }}
                                        </span>
                        </a>

                    </td>
                </tr>
                <tr  >
                    <td class="center-text"  align="center" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:white;text-decoration:none;letter-spacing:0px;">

                        <a href="mailto:{{ config('customConfig.weeDoSupportEmail') }}"    style="color:white;">
                            <span> {{ config('customConfig.weeDoSupportEmail')  }}</span>
                        </a> -

                        <a href="javascript:void(0)"    style="color:white;">
                            <span>WeeDo</span>
                        </a>

                    </td>
                </tr>
                <tr>
                    <td height="30" style="font-size:30px;line-height:30px;" >&nbsp;</td>
                </tr>

                <tr>
                    <td height="30" style="font-size:30px;line-height:30px;" >&nbsp;</td>
                </tr>
                <tr>
                    <td height="50" style="font-size:50px;line-height:50px;" >&nbsp;</td>
                </tr>

            </table>
            <!-- Content -->

        </td>
    </tr>
</table>
