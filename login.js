$(()=>{
    $("$btnLogin").click(()=>{
        $("$btnLogin").hide();
        $.post($("#loginForm").attr("action"),
        $("$loginForm :input").serializeArray(),
        (data)=>{
            $("#loginMsg").show().html(data);
            $("$btnLogin").show();
            return false;
        });
        $("#loginForm").submit(()=>{
            return false;
        });
    });
});