// data,url,fetch,atr
// ss
function loginAjax(a, b, d) {
    $(d.atr).empty();
    $(d.atr).append(d.html);
    $(d.atr).attr("disabled", "");
    var arr = CryptoJS.AES.encrypt(JSON.stringify(a), key, {
        format: CryptoJSAesJson
    }).toString();
    $.ajax({
        type: 'post',
        url: b,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        data: JSON.stringify(arr),
        success: function(data) {
            const obj = JSON.parse(JSON.stringify(data));
            var letsee = {
                ct: obj.ct,
                iv: obj.iv,
                s: obj.s
            }
            var odgj = JSON.parse(CryptoJS.AES.decrypt(JSON.stringify(letsee), key, {
                format: CryptoJSAesJson
            }).toString(CryptoJS.enc.Utf8));
            // console.log(odgj);
            var status = odgj.status;
            if (status === 'error') {
                toastr.error(odgj.pesan);
                $(d.atr).removeAttr("disabled");
                $(d.atr).empty();
                $(d.atr).append(d.fh);
            } else if (status === 'sukses') {
                toastr.success(odgj.pesan);
                // console.log(odgj.href);
                setTimeout(function() {
                    $(location).attr('href', odgj.href);
                }, 600);
            }
        },
        error: function(e, x, settings, exception) {
            var pesanError = {
                '400': "Server understood the request, but request content was invalid.",
                '401': "Unauthorized access.",
                '403': "Forbidden resource can't be accessed.",
                '500': "Internal server error.",
                '503': "Service unavailable."
            };
            if (e.status == 0) {
                toastr.error(e.statusText);
            } else {
                toastr.error(pesanError[e.status]);
            }
            $(d.atr).removeAttr("disabled");
            $(d.atr).empty();
            $(d.atr).append(d.fh);
        }
    });
}