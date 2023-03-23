if (document.querySelector(".mna-supporter-form")) {
    document.querySelector(".mna-supporter-form").addEventListener("submit", async function (e) {
        e.preventDefault();
        const loader = createLoader();
        setTimeout(async () => {
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
            removeLoader(loader);
        }, 750);
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

const createLoader = () => {
    let loader = document.createElement("div");
    loader.classList.add("mna-form-loader");
    loader.innerHTML = `
  <div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
  `;
    document.body.appendChild(loader);
    setTimeout(() => {
        loader.style.opacity = 1;
    }, 100);
    return loader;
}

const removeLoader = (loader) => {
    loader.style.opacity = 0;
    setTimeout(() => {
        loader.remove();
    }, 500);
}


if (document.querySelector('.mna-button.mna-share')) {
    const buttons = document.querySelectorAll('.mna-button.mna-share');
    buttons.forEach(button => {
        button.addEventListener('click', share(e, button));
    });
}


function share(e, button) {
    e.preventDefault();
    let type = button.dataset.shareType;
    let url = button.closest('.mna-share-buttons').dataset.shareUrl;
    let text = button.closest('.mna-share-buttons').dataset.shareText;
    let tweet = button.closest('.mna-share-buttons').dataset.shareTweet;
    switch (type) {
        case 'facebook':
            window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank');
            break;
        case 'twitter':
            window.open(`https://twitter.com/intent/tweet?text=${tweet}&url=${url}`, '_blank');
            break;
        case "whatsapp":
            window.open(`https://api.whatsapp.com/send?text=${text} ${url}`, '_blank');
            break;
        case "telegram":
            window.open(`https://t.me/share/url?url=${url}&text=${text}`, '_blank');
            break;
    }
}
