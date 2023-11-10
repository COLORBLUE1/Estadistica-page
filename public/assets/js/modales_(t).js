
    /* VALOR T*/

    function openModal() {
        document.getElementById("myModal_t").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal_t").style.display = "none";
    }

    const openModalBtn_t = document.getElementById("openModalBtn_t");
    const closeModalBtn_t = document.getElementById("closeModalBtn_t");
    const openModalBtn_result_t = document.getElementById("openModalBtn_t");
    const modal_t = document.getElementById("myModal_t");

    openModalBtn_t.addEventListener("click", () => {
        modal_t.style.display = "block";
    });

    closeModalBtn_t.addEventListener("click", () => {
        modal_t.style.display = "none";
    });

    openModalBtn_result_t.addEventListener("click", () => {
        modal_t.style.display = "block";
    });

    window.addEventListener("click", (event) => {
        if (event.target === modal_t) {
            modal_t.style.display = "none";
        }
    });

    document.getElementById("confidenceLevel_t").addEventListener("input", calculateInterval_t);
    document.getElementById("degreesOfFreedom_t").addEventListener("input", calculateInterval_t);
    document.getElementById("sampleMean_t").addEventListener("input", calculateInterval_t);
    document.getElementById("sampleStdDev_t").addEventListener("input", calculateInterval_t);
    document.getElementById("sampleSize_t").addEventListener("input", calculateInterval_t);

    function calculateInterval_t() {
        const confidenceLevel_t = parseFloat(document.getElementById("confidenceLevel_t").value);
        const degreesOfFreedom_t = parseFloat(document.getElementById("degreesOfFreedom_t").value);
        const sampleMean_t = parseFloat(document.getElementById("sampleMean_t").value);
        const sampleStdDev_t = parseFloat(document.getElementById("sampleStdDev_t").value);
        const sampleSize_t = parseFloat(document.getElementById("sampleSize_t").value);

        if (isNaN(confidenceLevel_t) || isNaN(degreesOfFreedom_t) || isNaN(sampleMean_t) || isNaN(sampleStdDev_t) || isNaN(sampleSize_t)) {
            // Manejar casos donde los valores ingresados no son válidos
            document.getElementById("resultLower_t").textContent = "NaN";
            document.getElementById("resultUpper_t").textContent = "NaN";
            return;
        }

        // Calcula el valor crítico de t
        const tValue_t = calculateT_t(confidenceLevel_t / 100, degreesOfFreedom_t);

        // Calcula el margen de error
        const marginOfError_t = 34 * (sampleStdDev_t / Math.sqrt(sampleSize_t));

        // Calcula el intervalo de confianza
        const lowerBound_t = sampleMean_t - marginOfError_t;
        const upperBound_t = sampleMean_t + marginOfError_t;

        // Muestra el resultado
        document.getElementById("resultLower_t").textContent = lowerBound_t.toFixed(4);
        document.getElementById("resultUpper_t").textContent = upperBound_t.toFixed(4);
    }

    function calculateT_t(confidence_t, df_t) {
        const alpha_t = 1 - confidence_t;
        const tDist_t = new Studentt_t(df_t);
        return tDist_t.ppf_t(1 - alpha_t / 2);
    }

    class Studentt_t {
        constructor(df_t) {
            this.df_t = df_t;
        }

        // Función cuantil (Percent Point Function)
        ppf_t(p_t) {
            const dof_t = this.df_t;
            if (p_t === 0.5) return 0;

            const x_t = erfinv_t(2 * p_t - 1);
            const val_t = x_t * Math.sqrt(2 * dof_t);
            return val_t;
        }
    }

    // Implementación de funciones matemáticas necesarias
    function erfinv_t(x_t) {
        const a1_t = 0.886226899;
        const a2_t = -1.645349621;
        const a3_t = 0.914624893;
        const a4_t = -0.140543331;
        const a5_t = 0.019095292;
        const p_t = 0.679337327;

        const sign_t = (x_t < 0) ? -1 : 1;
        x_t = Math.abs(x_t);

        const t_t = 1.0 / (1.0 + p_t * x_t);
        const erfinvValue_t = sign_t * Math.sqrt(-2 * Math.log(1 - x_t * x_t) / ((a5_t * t_t + a4_t) * t_t + a3_t) * t_t + a2_t) * t_t + a1_t;
        return erfinvValue_t;
    }

    /* MODAL OPEN Y CLOSE*/


    openModalBtn_t.addEventListener("click", () => {
        modal_2.style.display = "block";
    });

    closeModalBtn_t.addEventListener("click", () => {
        modal_2.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal_2.style.display = "none";
        }
    });






  
    /*  (t student)*/

     openModalBtn_result_t.addEventListener("click", () => {
     modal_2.style.display = "block";
  });

   closeModalBtn_result_t.addEventListener("click", () => {
       modal_2.style.display = "none";
   });

     window.addEventListener("click", (event) => {
       if (event.target === modal) {
            modal_2.style.display = "none";
     }
 });
