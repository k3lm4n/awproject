$(function validarSenha() {
    var senha1 = document.getElementById("pass1").value;
    var senha2 = document.getElementById("pass2").value;

    if (senha1 != "" && senha2 != "" && senha1 != senha2) {
        alert("Password Diferentes");
    }
});

$("body").on("click", "[data-action]", function(e) {
    e.preventDefault();

    var data = $(this).data();
    $.post(data.action, data, function() {}, "json").fail(function() {
        alert("Erro ao Processar Require");
    });
});

$("#AddMed").submit(function(e) {
    e.preventDefault();
    var DIRPAGE = "http//" + document.location.hostname + "/";
    let data = {
        nome: $("#nomemed").val(),
        sobre: $("#sobrenomemed").val(),
        sexo: $("#sexomed").val(),
        expe: $("#exper").val(),
        centro: $("#centro").val(),
        espe: $("#espe").val(),
        user: $("#user").val(),
        pass: $("#pass1").val(),
    };
    $.ajax({
        method: "POST",
        url: "MedicoAction/post",
        data: data,
        dataType: "json",
        sucess: function(msg) {
            alert("Entrou");
        },
    }).done(function(result) {
        console.log(result);
        $("#nomemed").val("");
        $("#sobrenomemed").val("");
        $("#sexomed").val("");
        $("#exper").val("");
        $("#centro").val("");
        $("#espe").val("");
        $("#user").val("");
        $("#pass1").val("");
        $("#pass2").val("");
        getMedicos();
    });
});

function getMedicos() {
    $.ajax({
        url: "MedicoAction/get",
        method: "GET",
        dataType: "json",
    }).done(function(result) {
        console.log(result);

        for (var i = 0; i < result.length; i++) {
            $("#GetMedicos").prepend(
                "<tr><td>" +
                result[i].nomeMed +
                " </td><td>" +
                result[i].sobreMed +
                "</td >< td > < /td> <td>" +
                result[i].experiencia +
                " </td> <td>" +
                result[i].sexo +
                " </td> <td>" +
                result[i].especialidade +
                " </td><td>" +
                result[i].centroReg +
                " </td> <td colspan=\"2\"><a class=\"btn btn-outline-warning\" style =\"margin-right: 5px;\" data-action=\"MedicoAction/put\" data-id=\"" + result[i].codMed + "\">Editar</a><a class=\"btn btn-outline-danger\" href =\"\">Eliminar</a></td></tr>");
        }
    });
}
getMedicos();

function showHint() {
    var str = $("#buscaMed").val();
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}

$("#formReg").submit(function(e) {
    e.preventDefault();
    var DIRPAGE = "http//" + document.location.hostname + "/";
    let data = {
        nome: $("#nomemed").val(),
        sobre: $("#sobrenomemed").val(),
        sexo: $("#sexomed").val(),
        expe: $("#exper").val(),
        centro: $("#centro").val(),
        espe: $("#espe").val(),
        user: $("#user").val(),
        pass: $("#pass1").val(),
    };
    $.ajax({
        method: "POST",
        url: "MedicoAction/post",
        data: data,
        dataType: "json",
        sucess: function(msg) {
            alert("Entrou");
        },
    }).done(function(result) {
        console.log(result);
    });
});
$("#formReg").submit(function(e) {
    e.preventDefault();
    var DIRPAGE = "http//" + document.location.hostname + "/";
    let data = {
        nome: $("#nomemed").val(),
        sobre: $("#sobrenomemed").val(),
        sexo: $("#sexomed").val(),
        expe: $("#exper").val(),
        centro: $("#centro").val(),
        espe: $("#espe").val(),
        user: $("#user").val(),
        pass: $("#pass1").val(),
    };
    $.ajax({
        method: "POST",
        url: "MedicoAction/post",
        data: data,
        dataType: "json",
        sucess: function(msg) {
            alert("Entrou");
        },
    }).done(function(result) {
        console.log(result);
    });
});

/*
    $(function() {

        $(".norma").css("display", "none");
        $("#gereEsp").addClass("active");

        $("a").on("click", function(e) {
            e.preventDefault();

            $("div")+removeClass("active");
            var id = $(this).attr("href");
            $("#" + id + "").addClass("active");

        });
    });*/