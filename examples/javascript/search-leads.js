const apiKey = process.env.LASTDATABASE_API_KEY;

if (!apiKey) {
    console.error(
        "ERROR: LASTDATABASE_API_KEY is not set."
    );

    process.exitCode = 1;
} else {
    const url = new URL(
        "https://lastdatabase.com/api/leads/search"
    );

    url.searchParams.set(
        "type",
        "email"
    );

    url.searchParams.set(
        "country",
        "usa"
    );

    url.searchParams.set(
        "industry",
        "healthcare"
    );

    url.searchParams.set(
        "limit",
        "10"
    );

    async function searchLeads() {
        const response = await fetch(
            url,
            {
                headers: {
                    Authorization:
                        `Bearer ${apiKey}`,
                    Accept:
                        "application/json",
                },
            }
        );

        const body =
            await response.text();

        if (!response.ok) {
            throw new Error(
                `HTTP ${response.status}: ${body}`
            );
        }

        const data =
            JSON.parse(body);

        console.log(
            JSON.stringify(
                data,
                null,
                2
            )
        );
    }

    searchLeads().catch(
        (error) => {
            console.error(
                error.message
            );

            process.exitCode = 1;
        }
    );
}
