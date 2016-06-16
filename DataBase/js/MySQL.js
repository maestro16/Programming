$(function(){
   //start insert
    $("#forma").submit(function( event ) {
        event.preventDefault();
        });
    $("#in").click(function() {
      var FIO = $("input[name='FIO']").val();// считываем значения из полей формы
     var Vuz = $("input[name='Vuz']").val();
     var Course = $("input[name='Course']").val();
     var Phone = $("input[name='Phone']").val();
 $.ajax({
      method: "POST", // определяем параметры запроса,
      url: "insertBD.php" , // куда будет посылаться запрос,  action="Bd.php" method="post"
     data: { FIO: FIO, Vuz: Vuz, Course: Course, Phone: Phone }
    }).done(function( msg ) {
console.log( "Data Saved: " + msg );
alert("Запись добавлена!");
    })
 })
 // end insert

 //start UPDATE
 $("#forma2").submit(function( event ) {
        event.preventDefault();
        });
    $("#up").click(function() {
     var id = $("input[name='id_u']").val();
     var FIO = $("input[name='FIO_u']").val();
     var Vuz = $("input[name='Vuz_u']").val();
     var Course = $("input[name='Course_u']").val();
     var Phone = $("input[name='Phone_u']").val();
 $.ajax({
      method: "POST", // определяем параметры запроса,
      url: "updateBD.php" , // куда будет посылаться запрос,  action="Bd.php" method="post"
     data: { id: id , FIO: FIO, Vuz: Vuz, Course: Course, Phone: Phone }
    }).done(function( msg ) {
console.log( "Data Saved: " + msg );
alert("Запись изменена!");
    })
 })
 //end UPDATE

 //start DELETE
 $("#forma3").submit(function( event ) {
        event.preventDefault();
        });
 $("#del").click(function() {
   var id = $("input[name='id']").val();// считываем значения из полей формы
 $.ajax({
   method: "POST", // определяем параметры запроса,
   url: "DeleteBD.php" , // куда будет посылаться запрос,  action="Bd.php" method="post"
  data: { id:id } ,
 }).done(function( msg ) {
 console.log( "Data Saved: " + msg );
 alert("Запись удалена!");
 })
 })
 //end DELETE
});
