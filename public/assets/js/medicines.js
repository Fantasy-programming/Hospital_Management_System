document.addEventListener("DOMContentLoaded", function (event) {
  fetchMedicines();

  let medTable = new DataTable("#medTable", {
    lengthChange: false,
  });
  let table = document.getElementById("medTable");
  let editForm = document.getElementById("editForm");
  let insertForm = document.getElementById("insertForm");
  let createBtn = insertForm.querySelector("#createBtn"); // Use querySelector to get the element
  let updateBtn = editForm.querySelector("#UpdateBtn");

  // fetch medicines data from db
  async function fetchMedicines() {
    // use async await to fetch data
    try {
      const response = await fetch("/pharmacist/medicinesstore");
      const medicines = await response.json();
      medTable.clear().draw();
      // Loop throught the array
      medicines.forEach((medicine) => {
        medTable.row
          .add([
            medicine.name,
            medicine.category,
            medicine.type,
            medicine.ammount,
            `<Button type="button" class="btn editBtn" value="${medicine.med_id}" data-bs-toggle="offcanvas" data-bs-target="#editMedOffCanvas"><span class="fas fa-edit"></span></Button>
            <Button type="button" class="btn deleteBtn" value="${medicine.med_id}"><span class="fas fa-trash-alt"></span></Button>`,
          ])
          .draw(false);
      });
      Putfire();
    } catch (err) {
      console.log(err);
    }
  }

  function Putfire() {
    // When clicking on the edit btn in the table (vanillajs)
    editbtns = table.querySelectorAll(".editBtn");
    deletebtns = table.querySelectorAll(".deleteBtn");
    editbtns.forEach((btn) => {
      // add onclick event to each edit btn
      btn.addEventListener("click", async function () {
        let id = btn.getAttribute("value");
        console.log("cool");
        // fetch medicine data from db
        try {
          response = await fetch("/pharmacist/medicinesstore?id=" + id, {
            method: "POST",
          });
          const medicine = await response.json();
          console.log(medicine);
          // put data to the edit form
          // input with name="firstname"
          editForm.querySelector('input[name="id"]').value = medicine.med_id;
          editForm.querySelector('input[name="name"]').value = medicine.name;
          editForm.querySelector('input[name="category"]').value =
            medicine.category;
          editForm.querySelector('input[name="type"]').value = medicine.type;
          editForm.querySelector('input[name="ammountInStock"]').value =
            medicine.ammount;
        } catch (err) {
          console.log(err);
        }
      });
    });

    deletebtns.forEach((btn) => {
      btn.addEventListener("click", async function () {
        // use swal to confirm delete
        swal
          .fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "success",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
          })
          .then(async (result) => {
            if (result.isConfirmed) {
              let id = btn.getAttribute("value");
              const data = new FormData();
              data.append("_method", "DELETE");
              try {
                const response = await fetch("/pharmacist/medicines?id=" + id, {
                  method: "POST",
                  body: data,
                });
                const result = await response.json();
                if (result.statusCode === 200) {
                  swal.fire("Deleted!", result.message, "success");
                  fetchMedicines();
                } else if (result.statusCode === 500) {
                  swal.fire(result.message, {
                    icon: "error",
                  });
                }
              } catch (err) {
                console.log(err);
              }
            }
          });
      });
    });
  }

  editForm.addEventListener("submit", async function (e) {
    e.preventDefault();
    updateBtn.disabled = true;

    const data = new FormData(editForm);
    console.log(data);
    try {
      const response = await fetch("/pharmacist/medicines", {
        method: "POST",
        body: data,
      });
      const result = await response.json();
      if (result.statusCode === 200) {
        updateBtn.disabled = false;
        editForm.reset();
        let toastBootstrap = new bootstrap.Toast(successToast);
        toastBootstrap.show();
        successToastMsg.textContent = result.message;
        fetchMedicines();
      } else if (result.statusCode === 500) {
        updateBtn.disabled = false;
        editForm.reset();
        let toastBootstrap = new bootstrap.Toast(errorToast);
        toastBootstrap.show();
        errorToastMsg.textContent = result.message;
      } else if (result.statusCode === 400) {
        updateBtn.disabled = false;
        let toastBootstrap = new bootstrap.Toast(errorToast);
        toastBootstrap.show();
        errorToastMsg.textContent = result.message;
      }
    } catch (error) {
      console.log(error);
    }
  });

  insertForm.addEventListener("submit", async function (e) {
    e.preventDefault();
    createBtn.disabled = true;

    const data = new FormData(insertForm);
    try {
      const response = await fetch("/pharmacist/medicines", {
        method: "POST",
        body: data,
      });
      const result = await response.json();
      if (result.statusCode === 200) {
        updateBtn.disabled = false;
        insertForm.reset();
        let toastBootstrap = new bootstrap.Toast(successToast);
        toastBootstrap.show();
        successToastMsg.textContent = result.message;
        fetchMedicines();
      } else if (result.statusCode === 500) {
        insertBtn.disabled = false;
        insertForm.reset();
        let toastBootstrap = new bootstrap.Toast(errorToast);
        toastBootstrap.show();
        errorToastMsg.textContent = result.message;
      } else if (result.statusCode === 400) {
        insertBtn.disabled = false;
        let toastBootstrap = new bootstrap.Toast(errorToast);
        toastBootstrap.show();
        errorToastMsg.textContent = result.message;
      }
    } catch (error) {
      console.log(error);
    }
  });
});
