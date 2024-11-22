/*
* Version: 1.0.0
* Template: PF Project
* Author: Brandless Digital
* Design and Developed by: Brandless Digital
* NOTE: This file contains the styling for Template.
*/


/*----------------------------------------------
Index Of Script
------------------------------------------------

------- Plugin Init --------

:: Chart

------------------------------------------------
Index Of Script
----------------------------------------------*/

(function (jQuery) {
    "use strict";

  if (document.querySelectorAll('#file-manager-chart').length) {
    const variableColors = IQUtils.getVariableColor();
    const colors = [variableColors.primary];
    const options = {
      series: [
        {
          name: 'Booked',
          data: [70, 40, 90, 40, 70, 30, 80]
        }],
      colors: colors,
      chart: {
        height: 310,
        type: 'line',
        zoom: {
          enabled: false
        },
        toolbar: {
          show: false
        },
      },
      dataLabels: {
        enabled: false
      },
      legend: {
        show:false,
      },
      stroke: {
        show: true,
        curve: 'smooth',
        lineCap: 'butt',
        width: 3,
        dashArray: 0,
      },
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July'],
        axisBorder: {
          show: false,

      },
      axisTicks: {
          show: false,

      },
      },
      grid: {
        show: true,
        strokeDashArray: 3,
    },
      yaxis: {
        labels: {
          formatter: function (value) {
            return value + " GB";
          }
        },
      },
    };

    const chart = new ApexCharts(document.querySelector("#file-manager-chart"), options);
    chart.render();

    document.addEventListener('theme_color', (e) => {
      const variableColors = IQUtils.getVariableColor();
      const colors = [variableColors.primary];

      const newOpt = {
        colors: colors,
        chart: {
          dropShadow: {
            color: colors,
          },
        },
        fill: {
          type: 'gradient',
          gradient: {
              shade: 'dark',
              type: "vertical",
              gradientToColors: colors, // optional, if not defined - uses the shades of same color in series
              opacityFrom: 1,
              opacityTo: 1,
              colors: colors,
          }
        },
     }
      chart.updateOptions(newOpt)
    })

    document.addEventListener('body_font_family',(e) =>{
      let prefix = getComputedStyle(document.body).getPropertyValue('--prefix') || 'bs-';
      if (prefix) {
          prefix = prefix.trim()
      }
      const font_1 = getComputedStyle(document.body).getPropertyValue(`--${prefix}body-font-family`);
      const fonts = [font_1.trim()];
      const newOpt = {
          chart: {
              fontFamily: fonts,
          }
  }
  chart.updateOptions(newOpt)
  })

  }

 
  if ($('#storage-chart').length) {
    // Get the dynamic storage used and total storage values from the data attributes
    let storageUsedKB = $('#storage-chart').data('storage'); // Storage used in KB
    let totalStorageKB = $('#storage-chart').data('total-storage'); // Total storage in KB

    // Convert storage from KB to appropriate units (MB, GB, TB)
    function formatStorage(kb) {
        if (kb >= 1024 * 1024 * 1024) {
            return (kb / (1024 * 1024 * 1024)).toFixed(2) + "TB";
        } else if (kb >= 1024 * 1024) {
            return (kb / (1024 * 1024)).toFixed(2) + "GB";
        } else if (kb >= 1024) {
            return (kb / 1024).toFixed(2) + "MB";
        } else {
            return kb + "KB"; // If under 1MB, still display in KB
        }
    }

    // Convert storage values
    let storageUsed = formatStorage(storageUsedKB);
    let totalStorage = formatStorage(totalStorageKB);

    const variableColors = IQUtils.getVariableColor();
    const colors = [variableColors.primary];

    const options = {
        series: [(storageUsedKB / totalStorageKB) * 100], // Percentage of storage used
        labels: [`${storageUsed} of ${totalStorage}`], // Display storage in appropriate units
        chart: {
            type: 'radialBar',
            offsetY: -20,
            sparkline: {
                enabled: true
            },
        },
        colors: colors,
        plotOptions: {
            radialBar: {
                startAngle: -90,
                endAngle: 90,
                track: {
                    background: colors[0] + '1a',
                    show: true,
                    strokeWidth: '97%',
                    opacity: 1,
                    margin: 5,
                    dropShadow: {
                        enabled: false,
                        top: 0,
                        left: 0,
                        blur: 3,
                        opacity: 0.5
                    }
                },
                dataLabels: {
                    name: {
                        fontSize: '16px',
                        color: undefined,
                        offsetY: 20,
                    },
                    value: {
                        offsetY: -25,
                        fontSize: '40px',
                        color: undefined,
                        formatter: function (val) {
                            return val.toFixed(1) + "%"; // Display percentage used
                        }
                    },
                }
            }
        },
        grid: {
            padding: {
                top: -10
            }
        },
    };

    var chart = new ApexCharts(document.querySelector("#storage-chart"), options);
    chart.render();

    // Optional: Update the chart dynamically when storage values change
    $(document).on('storageUpdated', function (e, newStorageUsedKB, newTotalStorageKB) {
        let newStorageUsed = formatStorage(newStorageUsedKB);
        let newTotalStorage = formatStorage(newTotalStorageKB);
        let newPercentageUsed = (newStorageUsedKB / newTotalStorageKB) * 100;

        chart.updateOptions({
            series: [newPercentageUsed],
            labels: [`${newStorageUsed} of ${newTotalStorage}`]
        });
    });
}




})(jQuery)
