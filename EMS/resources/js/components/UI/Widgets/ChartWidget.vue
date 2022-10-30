<template>
        <Bar :chart-options="chartOptions" :chart-data="chartData" :chart-id="chartId" :dataset-id-key="datasetIdKey"
            :plugins="plugins" :css-classes="cssClasses" :styles="styles" />
</template>

<script setup>
import { Bar, Line } from 'vue-chartjs'
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)
const props = defineProps({
    chartId: {
      type: String,
      default: 'bar-chart'
    },
    datasetIdKey: {
      type: String,
      default: 'label'
    },
    width: {
      type: Number,
      default: 400
    },
    height: {
      type: Number,
      default: 400
    },
    cssClasses: {
      default: '',
      type: String
    },
    styles: {
      type: Object,
      default: () => {}
    },
    plugins: {
      type: Object,
      default: () => {}
    }
})
const chartData = {
    labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June','July','Aug','Sep','Nov','December'],
    datasets: [
        {
            label: 'New',
            data: [10, 5, 12],
            backgroundColor: [
                '#009779'
            ]
        },
        {
            label: 'Resigns',
            data: [3, 2, 5],
            backgroundColor: [
                '#F84F31'
            ]
        }
    ]
};
const chartOptions = {
        responsive: true,
        maintainAspectRatio: false
      }

</script>

<style lang="scss" scoped>

</style>