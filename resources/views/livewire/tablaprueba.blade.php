<div>
    <script src="path/to/alpine.js"></script>

    <div x-data="{ lineaTrabajo: '', mes: '' }" x-init="init()">
        <select x-model="lineaTrabajo" x-bind="lineaTrabajo">
            <option value="">Seleccione una línea de trabajo</option>
            <option value="lineaDeTrabajo1">Línea de trabajo 1</option>
            <option value="lineaDeTrabajo2">Línea de trabajo 2</option>
        </select>
        <select x-model="mes" x-bind="mes">
            <option value="">Seleccione un mes</option>
            <option value="enero">Enero</option>
            <option value="febrero">Febrero</option>
            <option value="marzo">Marzo</option>
            <option value="abril">Abril</option>
            <option value="mayo">Mayo</option>
            <option value="junio">Junio</option>
            <option value="julio">Julio</option>
            <option value="agosto">Agosto</option>
            <option value="septiembre">Septiembre</option>
            <option value="octubre">Octubre</option>
            <option value="noviembre">Noviembre</option>
            <option value="diciembre">Diciembre</option>
        </select>

        <table x-show="mes && lineaTrabajo">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <template x-for="usuario in usuarios" :key="usuario.id">
                    <tr>
                        <td x-text="usuario.nombre"></td>
                        <td x-text="usuario.manzana"></td>
                        <td x-text="usuario.casa"></td>
                    </tr>
                </template>
            </tbody>
        </table>

        <script>
        function init() {
            // Cargar usuarios al iniciar la página
            cargarUsuarios();
        }

        function cargarUsuarios() {
            fetch(`/usuarios?lineaTrabajo=${this.lineaTrabajo}&mes=${this.mes}`)
                .then(response => response.json())
                .then(data => this.usuarios = data);
        }
            </script>
    </div>
</div>
