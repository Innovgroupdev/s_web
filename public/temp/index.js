// var ctx = document.getElementById('one');

const labels = [
  "Togo",
  "Bénin",
  "USA",
  "France",
  "Rwanda",
  "Sénégal",
];

const data = {
  labels: labels,
  datasets: [
    {
      label: "NOMBRE D'INSCRITS A LA NEWSLETTER PAR PAYS",
      backgroundColor: "rgba(251, 134, 80, 0.4)",
      hoverBackgroundColor: "rgb(251, 134, 80)",
      borderWidth: 2,
      borderColor: "rgb(251, 134, 80)",
      data: [300, 252, 40, 2, 50, 175],
    },
  ],
};

const data2 = {
  labels: ["Togo", "Bénin", "USA", "Sénégal"],
  datasets: [
    {
      label: "My First Dataset",
      data: [300, 100, 20, 50],
      backgroundColor: ["#55C3F5", "#bee6fa", "rgb(113, 117, 151)", "rgb(251, 134, 80)"],
      hoverOffset: 4,
    },
  ],
};

const data4 = {
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

const config1 = {
  type: "bar",
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
};

const config2 = {
  type: "pie",
  data: data2,
};

const config3 = {
  type: "bar",
  data: data,
  options: {
    indexAxis: "y",
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
};

const config4 = {
  type: "bar",
  data: data4,
};
