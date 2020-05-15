{{-- Aunque haya un solo mail, es bueno abstraerse de cosas como
    el footer o el background e ir a los datos que son relevantes
    en el cuerpo de este mail, especialmente porque el HTML de los
    emails responsivos suelen no ser muy legible.
    Por eso puse una cantidad importante del codigo en una vista 
    maestra que luego extiendo --}}
@extends('layout.mail')

@section('content')
<tr>
    <td>
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;width:100%;">
            <tbody class="content">
                <tr class="item-draggable dragging_over">
                    <td>
                        <div style="padding:0 5%;background-color:#7350FF;">
                            <h1
                                style="color:#FFF;max-width:320px;font-size:32px;line-height:1.3em;font-weight:600;font-family:'Avenir Next', Avenir, 'Segoe UI', sans-serif;padding:8% 0;margin:0;">
                                ¡Hola {{ $prospect->name }}! Gracias por compartirnos tu contacto. <span
                                    style="font-family: 'Avenir Next', Avenir, 'Segoe UI', sans-serif; font-weight: 400;">Est&aacute;s
                                    a un paso de viajar en Cabify</span>
                            </h1>
                        </div>
                    </td>
                </tr>
                <tr class="item-draggable dragging_over">
                    <td>
                        <div style="padding:0 5% 8%;background-color:#FFF;">
                            <h1
                                style="color:#212240;max-width:320px;font-size:22px;line-height:1.3em;font-weight:600;font-family:'Avenir Next', Avenir, 'Segoe UI', sans-serif;padding:8% 0 30px;margin:0;">
                                Te regalamos $100 en tu primer viaje.
                                <span
                                    style="font-family: 'Avenir Next', Avenir, 'Segoe UI', sans-serif; font-weight: 400;">Carg&aacute;
                                    el siguiente c&oacute;digo en la secci&oacute;n
                                    "Promociones" de nuestra App.</span>
                            </h1>
                            <p
                                style="display:inline-block;padding:10px 20px;border-radius:24px;border:2px solid #212240;color:#212240;text-decoration:none;font-size:20px;font-weight:600;font-family:'Avenir Next', Avenir, 'Segoe UI', sans-serif;letter-spacing:3px;line-height:24px;margin:0;">
                                <a href="http://onelink.to/myvqta"
                                    style="color:#212240;text-decoration:none;font-size:20px;font-weight:600;font-family:'Avenir Next', Avenir, 'Segoe UI', sans-serif;">VUELTAENCABI
                                </a></p>
                            <p
                                style="color:#212240;font-size:11px;font-weight:400;font-family:'Avenir Next', Avenir, 'Segoe UI', sans-serif;text-indent:5px;line-height:18px;max-width:310px;">
                                *C&oacute;digo v&aacute;lido por $100 hasta 1000
                                usos desde 06/09/2018 hasta el 16/09/2018 inclusive.
                            </p>
                        </div>
                    </td>
                </tr>
                <tr class="item-draggable dragging_over">
                    <td>
                        <a href="#" target="_blank"><img
                                src="https://gallery.mailchimp.com/ff0958ed3efacdfc1d7958baf/images/9aa5acd5-868c-4a23-8072-918f7175584d.gif"
                                style="width: 100%; display: block;" border="0"
                                alt="9aa5acd5-868c-4a23-8072-918f7175584d.gif"></a>
                    </td>
                </tr>
                <tr class="item-draggable dragging_over">
                    <td>
                        <div style="padding:8% 5%;background-color:#212240;">
                            <p
                                style="color:#FFF;font-size:16px;line-height:1.3em;font-weight:400;font-family:'Avenir Next', Avenir, 'Segoe UI', sans-serif;padding:0;margin:0;text-align:center;">
                                <strong
                                    style="font-family:'Avenir Next', Avenir, 'Segoe UI', sans-serif;font-weight:600;">La
                                    ciudad es tuya.</strong>
                                El equipo Cabify.
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
@endsection