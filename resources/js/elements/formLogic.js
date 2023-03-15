if (document.querySelector(".mna-supporter-form")) {
    document.querySelector(".mna-supporter-form").addEventListener("submit", async function (e) {
        e.preventDefault();
        var form = document.querySelector(".mna-supporter-form");
        var formData = new FormData(form);
        var response = await fetch(form.action, {
            method: "POST",
            body: formData,
        });
        var data = await response.json();
        console.log(data)
        if (data.success) {
            form.closest(".mna-form-step").remove();
            document.querySelector(".mna-form-step.mna-form-thanks").style.display = "block";
        }
    });
}

if (document.querySelector(".mna-open-signup-form")) {
    let openButton = document.querySelector(".mna-open-signup-form");
    let form = openButton.closest(".mna-form-container");
    openButton.addEventListener("click", function (e) {
        e.preventDefault();
        if (openButton.classList.contains("mna-open-signup-form--open")) {
            openButton.classList.remove("mna-open-signup-form--open");
            form.style.transform = "translateY(calc(100% - 5.4rem)";
            form.style.overflow = "hidden";
            document.documentElement.style.overflow = "auto";
            openButton.innerHTML = `Unterschreiben <i class="icofont-pencil"></i>`;
        } else {
            openButton.classList.add("mna-open-signup-form--open");
            form.style.transform = "translateY(0)";
            form.style.overflow = "auto";
            document.documentElement.style.overflow = "hidden";
            openButton.innerHTML = `Schließen <i class="icofont-close"></i>`;
        }
    });
}
