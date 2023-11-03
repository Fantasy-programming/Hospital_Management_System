// List

var options = {
  valueNames: ["f-text"],
  item: `
  <li class="d-flex flex-nowrap justify-content-between align-items-center request-element p-3 mb-3 rounded-4">
  <div class="d-flex align-items-center justify-content-center">
      <div class="appointment-pics">
          <span><img id="userimage" src="https://imgur.com/WInwkB8.jpg"></span>
      </div>
      <div class=" ps-2 d-flex flex-column flex-nowrap">
          <p class="p-0 mb-0">Name: <span class="f-text">canada</span></p>
          <p class="p-0 mb-0">Age</p>
      </div>
  </div>
  <div class="fs-1 neue">
      2
  </div>
</li>
  `,
};

var userList = new List("request-items", options);

// Table

const dataList = [
  [1, "John", "Doe", "genaco", "high", "link", "08/33/2222", "08/33/2222"],
  [2, "John", "Smith", "genaco", "high", "link", "08/33/2222", "08/33/2222"],
  [3, "Jim", "Brown", "genaco", "high", "link", "08/33/2222", "08/33/2222"],
  [4, "Jake", "White", "genaco", "high", "link", "08/33/2222", "08/33/2222"],
  [5, "Julie", "Black", "genaco", "high", "link", "08/33/2222", "08/33/2222"],
  // ...
];

$(document).ready(function () {
  $("#myTable").DataTable({
    processing: true,
    serverSide: true,
    serverMethod: "post",
    ajax: {
      url: "/doctor/result",
    },
    columns: [
      { data: "first_name" },
      { data: "last_name" },
      { data: "email" },
      { data: "age" },
      { data: "role" },
    ],
  });
});

// let dataTable = new DataTable("#myTable", {});

// new simpleDataTable("myTable", dataList, {
//   // pagination options

//   itemsPerPage: 5,
//   pageSelection: [5, 10, 20, 50, 100],

//   // appearance options
//   fontFamily: "'Segoe UI', arial, sans-serif",
//   title: "",
//   height: "19rem",

//   // search options
//   searchableColumns: [], // column index
//   onRowRender: function (data, column) {
//     column[1] = `<td class="d-flex align-items-center">
//       <img src="${data[4]}" style="width:30px; border-radius:50%; margin-right:5px;" /> <span>${data[1]}</span>
//       </td>`;
//     column[4] = `<td>
//       <a href="${data[5]}")" onClick="alert('You clicked row id ${data[0]}')">Click</a>
//       </td>`;
//     return column;
//   },
// });
