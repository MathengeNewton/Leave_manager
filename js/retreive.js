var URLid = 1;

var btn = document.getElementById("btn");
var dumpPointer = document.getElementById("data-dump");
btn.addEventListener("click", function() {
  var myRequest = new XMLHttpRequest();
  myRequest.open(
    "GET",
    "C:xampphtdocsdistribution\retreive\retreive" + URLid + ".php"
  );
  myRequest.onload = function() {
    var dataLoad = JSON.parse(myRequest.responseText);
    dump(dataLoad);
  };
  myRequest.send();
  URLid++;
});

function dump(data) {
  var dumpCounter = "";
  for (let i = 0; i < data.length; i++) {
    dumpCounter +=
      "<tbody><ti>" +
      data[i].name +
      ".</ti>" +
      "<ti>" +
      data[i].species +
      ".</ti >" +
      "<ti>" +
      data[i].food +
      ".</ti></tbody><br>";
  }
  dumpPointer.insertAdjacentHTML("beforeend", dumpCounter);
}
