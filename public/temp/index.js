console.log(getData(5));

const labels = ["Togo", "Bénin", "USA", "France", "Rwanda", "Sénégal"];

const data2 = {
    labels: ["Togo", "Bénin", "USA", "Sénégal"],
    datasets: [
        {
            data: [300, 100, 20, 50],
            backgroundColor: [
                "#55C3F5",
                "#bee6fa",
                "rgb(113, 117, 151)",
                "rgb(251, 134, 80)",
            ],
            hoverOffset: 4,
        },
    ],
};

const data3 = {
    labels: labels,
    datasets: [
        {
            label: "NOMBRE DE VISITEURS PAR PAYS",
            backgroundColor: "rgba(47, 72, 88, 0.7)",
            hoverBackgroundColor: "rgb(47, 72, 88)",
            borderColor: "rgb(47, 72, 88)",
            borderWidth: 2,
            data: [200, 100, 40, 20, 50, 175],
        },
    ],
};

const config2 = {
    type: "pie",
    data: data2,
};

const config3 = {
    type: "bar",
    data: data3,
};
