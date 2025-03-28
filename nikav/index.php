<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podatki uporabnikov</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <div x-data="usersTable()">
        <h1>Podatki uporabnikov</h1>
        
        <div x-show="loading" id="loading">Nalagam podatke...</div>
        
        <table x-show="!loading" id="usersTable">
            <thead>
                <tr>
                    <template x-for="header in headers" :key="header">
                        <th x-text="header"></th>
                    </template>
                </tr>
            </thead>
            <tbody>
                <template x-for="user in users" :key="user.id">
                    <tr>
                        <template x-for="value in Object.values(user)" :key="value">
                            <td x-text="value"></td>
                        </template>
                    </tr>
                </template>
            </tbody>
        </table>

        <div x-show="error" x-text="error" class="error"></div>
    </div>

    <script>
        function usersTable() {
            return {
                users: [],
                headers: [],
                loading: true,
                error: null,
                async init() {
                    try {
                        const response = await fetch('api.php');
                        if (!response.ok) throw new Error('404');
                        this.users = await response.json();
                        if (this.users.length > 0) {
                            this.headers = Object.keys(this.users[0]);
                        }
                    } catch (error) {
                        this.error = 'Napaka pri nalaganju podatkov: ' + error.message;
                    } finally {
                        this.loading = false;
                    }
                }
            }
        }
    </script>
</body>
</html>


