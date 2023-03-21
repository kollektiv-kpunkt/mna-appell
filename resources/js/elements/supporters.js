if (document.querySelector(".mna-supporters__more")) {
    const moreButton = document.querySelector(".mna-supporters__more");
    const supporters = document.querySelector(".mna-supporters");
    moreButton.addEventListener("click", async () => {
        const response = await fetch("/supporters");
        const data = await response.text();
        supporters.innerHTML = data;
        moreButton.remove();
        supporters.classList.remove("mna-supporters--long");
    });
}
