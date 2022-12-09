function functpe(parent) {
    const museum_class = document.getElementById(`museum_class${parent}`);
    const exchange_class = document.getElementById(`exchange_class${parent}`);
    const deu_3rd_class = document.getElementById(`deu_3rd_class${parent}`);
    const job_class = document.getElementById(`job_class${parent}`);

    const scholarship_class = document.getElementById(
        `scholarship_class${parent}`
    );

    const lang_class = document.getElementById(`lang_class${parent}`);
    const dap_edu_class = document.getElementById(`dap_edu_class${parent}`);
    const dap_job_class = document.getElementById(`dap_job_class${parent}`);

    const dap_haksa_class = document.getElementById(`dap_haksa_class${parent}`); // 중간 테스트

    const dap_dorm_class = document.getElementById(`dap_dorm_class${parent}`);
    const dap_scholarship_class = document.getElementById(
        `dap_scholarship_class${parent}`
    );

    console.log("functpe 확인했습니다.");
    scholarship_class.addEventListener("click", () => {
        console.log("장학 공지 click");
        document.getElementById(
            `scholarship_class${parent}_child`
        ).style.display = "block";
        document.getElementById(`museum_class${parent}_child`).style.display =
            "none";
        document.getElementById(`deu_3rd_class${parent}_child`).style.display =
            "none";
        document.getElementById(`lang_class${parent}_child`).style.display =
            "none";
        document.getElementById(`exchange_class${parent}_child`).style.display =
            "none";
        document.getElementById(`job_class${parent}_child`).style.display =
            "none";
        document.getElementById(`dap_edu_class${parent}_child`).style.display =
            "none";
        document.getElementById(`dap_job_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_haksa_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`dap_dorm_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_scholarship_class${parent}_child`
        ).style.display = "none";
    });
    museum_class.addEventListener("click", () => {
        console.log("박물관 click");
        document.getElementById(`museum_class${parent}_child`).style.display =
            "block";
        document.getElementById(
            `scholarship_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`deu_3rd_class${parent}_child`).style.display =
            "none";
        document.getElementById(`lang_class${parent}_child`).style.display =
            "none";
        document.getElementById(`exchange_class${parent}_child`).style.display =
            "none";
        document.getElementById(`job_class${parent}_child`).style.display =
            "none";
        document.getElementById(`dap_edu_class${parent}_child`).style.display =
            "none";
        document.getElementById(`dap_job_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_haksa_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`dap_dorm_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_scholarship_class${parent}_child`
        ).style.display = "none";
    });

    deu_3rd_class.addEventListener("click", () => {
        console.log("외부기관 click");
        document.getElementById(`deu_3rd_class${parent}_child`).style.display =
            "block";
        document.getElementById(`museum_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `scholarship_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`lang_class${parent}_child`).style.display =
            "none";
        document.getElementById(`exchange_class${parent}_child`).style.display =
            "none";
        document.getElementById(`job_class${parent}_child`).style.display =
            "none";
        document.getElementById(`dap_edu_class${parent}_child`).style.display =
            "none";
        document.getElementById(`dap_job_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_haksa_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`dap_dorm_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_scholarship_class${parent}_child`
        ).style.display = "none";
    });
    exchange_class.addEventListener("click", () => {
        console.log("대외협력처 click");
        document.getElementById(`exchange_class${parent}_child`).style.display =
            "block";
        document.getElementById(`deu_3rd_class${parent}_child`).style.display =
            "none";
        document.getElementById(`museum_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `scholarship_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`lang_class${parent}_child`).style.display =
            "none";
        document.getElementById(`job_class${parent}_child`).style.display =
            "none";
        document.getElementById(`dap_edu_class${parent}_child`).style.display =
            "none";
        document.getElementById(`dap_job_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_haksa_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`dap_dorm_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_scholarship_class${parent}_child`
        ).style.display = "none";
    });
    lang_class.addEventListener("click", () => {
        console.log("국제언어교육원 click");
        document.getElementById(`lang_class${parent}_child`).style.display =
            "block";
        document.getElementById(`exchange_class${parent}_child`).style.display =
            "none";
        document.getElementById(`deu_3rd_class${parent}_child`).style.display =
            "none";
        document.getElementById(`museum_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `scholarship_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`job_class${parent}_child`).style.display =
            "none";
        document.getElementById(`dap_edu_class${parent}_child`).style.display =
            "none";
        document.getElementById(`dap_job_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_haksa_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`dap_dorm_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_scholarship_class${parent}_child`
        ).style.display = "none";
    });
    job_class.addEventListener("click", () => {
        console.log("채용공고 click");
        document.getElementById(`job_class${parent}_child`).style.display =
            "block";
        document.getElementById(`lang_class${parent}_child`).style.display =
            "none";
        document.getElementById(`exchange_class${parent}_child`).style.display =
            "none";
        document.getElementById(`deu_3rd_class${parent}_child`).style.display =
            "none";
        document.getElementById(`museum_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `scholarship_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`dap_edu_class${parent}_child`).style.display =
            "none";
        document.getElementById(`dap_job_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_haksa_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`dap_dorm_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_scholarship_class${parent}_child`
        ).style.display = "none";
    });
    dap_edu_class.addEventListener("click", () => {
        console.log("채용공고 click");
        document.getElementById(`dap_edu_class${parent}_child`).style.display =
            "block";
        document.getElementById(`job_class${parent}_child`).style.display =
            "none";
        document.getElementById(`lang_class${parent}_child`).style.display =
            "none";
        document.getElementById(`exchange_class${parent}_child`).style.display =
            "none";
        document.getElementById(`deu_3rd_class${parent}_child`).style.display =
            "none";
        document.getElementById(`museum_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `scholarship_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`dap_job_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_haksa_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`dap_dorm_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_scholarship_class${parent}_child`
        ).style.display = "none";
    });
    dap_job_class.addEventListener("click", () => {
        console.log("채용공고 click");
        document.getElementById(`dap_job_class${parent}_child`).style.display =
            "block";
        document.getElementById(`dap_edu_class${parent}_child`).style.display =
            "none";
        document.getElementById(`job_class${parent}_child`).style.display =
            "none";
        document.getElementById(`lang_class${parent}_child`).style.display =
            "none";
        document.getElementById(`exchange_class${parent}_child`).style.display =
            "none";
        document.getElementById(`deu_3rd_class${parent}_child`).style.display =
            "none";
        document.getElementById(`museum_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `scholarship_class${parent}_child`
        ).style.display = "none";
        document.getElementById(
            `dap_haksa_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`dap_dorm_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_scholarship_class${parent}_child`
        ).style.display = "none";
    });
    dap_haksa_class.addEventListener("click", () => {
        console.log("학사공고 click");
        document.getElementById(
            `dap_haksa_class${parent}_child`
        ).style.display = "block";
        document.getElementById(`dap_job_class${parent}_child`).style.display =
            "none";
        document.getElementById(`dap_edu_class${parent}_child`).style.display =
            "none";
        document.getElementById(`job_class${parent}_child`).style.display =
            "none";
        document.getElementById(`lang_class${parent}_child`).style.display =
            "none";
        document.getElementById(`exchange_class${parent}_child`).style.display =
            "none";
        document.getElementById(`deu_3rd_class${parent}_child`).style.display =
            "none";
        document.getElementById(`museum_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `scholarship_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`dap_dorm_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_scholarship_class${parent}_child`
        ).style.display = "none";
    });
    dap_dorm_class.addEventListener("click", () => {
        console.log("채용공고 click");
        document.getElementById(`dap_dorm_class${parent}_child`).style.display =
            "block";
        document.getElementById(
            `dap_haksa_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`dap_job_class${parent}_child`).style.display =
            "none";
        document.getElementById(`dap_edu_class${parent}_child`).style.display =
            "none";
        document.getElementById(`job_class${parent}_child`).style.display =
            "none";
        document.getElementById(`lang_class${parent}_child`).style.display =
            "none";
        document.getElementById(`exchange_class${parent}_child`).style.display =
            "none";
        document.getElementById(`deu_3rd_class${parent}_child`).style.display =
            "none";
        document.getElementById(`museum_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `scholarship_class${parent}_child`
        ).style.display = "none";
        document.getElementById(
            `dap_scholarship_class${parent}_child`
        ).style.display = "none";
    });
    dap_scholarship_class.addEventListener("click", () => {
        console.log("채용공고 click");
        document.getElementById(
            `dap_scholarship_class${parent}_child`
        ).style.display = "block";
        document.getElementById(`dap_dorm_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `dap_haksa_class${parent}_child`
        ).style.display = "none";
        document.getElementById(`dap_job_class${parent}_child`).style.display =
            "none";
        document.getElementById(`dap_edu_class${parent}_child`).style.display =
            "none";
        document.getElementById(`job_class${parent}_child`).style.display =
            "none";
        document.getElementById(`lang_class${parent}_child`).style.display =
            "none";
        document.getElementById(`exchange_class${parent}_child`).style.display =
            "none";
        document.getElementById(`deu_3rd_class${parent}_child`).style.display =
            "none";
        document.getElementById(`museum_class${parent}_child`).style.display =
            "none";
        document.getElementById(
            `scholarship_class${parent}_child`
        ).style.display = "none";
    });
}
