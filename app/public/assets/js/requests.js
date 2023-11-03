document.addEventListener("DOMContentLoaded", function (event) {
  const i = document.getElementById("idv");
  const id = i.getAttribute("value");

  // Fetch pending requests
  fetchRequests("Pending", id);

  // Fetch Fulfilled requests
  fetchRequests("fullfilled");

  // Create the tables

  const PendingReqTable = new DataTable("#pdReqTable", {
    lengthChange: false,
  });

  const fullfilledReqTable = new DataTable("#pReqTable", {
    lengthChange: false,
  });

  const pReqTable = document.getElementById("pdReqTable");
  const fReqTable = document.getElementById("pReqTable");

  async function fetchRequests(type, id) {
    try {
      // create the url
      const response = await fetch(`/requests/${id}/${type}`);
      const requests = await response.json();
      console.log(requests);

      if (type === "Pending") {
        createPendingTable(requests);
      } else {
        // createFullfilledTable(requests);
      }
    } catch (e) {
      console.log(e);
    }
  }

  function createPendingTable(requests) {
    PendingReqTable.clear().draw();

    requests.forEach((request) => {
      PendingReqTable.row
        .add([
          request.service_name,
          `${request.Description} ${request.target_last_name}`,
          request.requester_name,
          `${request.target_last_name} ${request.target_first_name}`,
          request.request_date,
          request.status,
          `<a type="button" class="btn showBtn" href="requests/${request.request_id}"><span class="fa-solid fa-eye"></span></a>`,
        ])
        .draw(false);
    });
  }

  function putFire() {}
});
