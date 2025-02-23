class BackendClient(BaseClient):
    def __init__(
        self,
        cfg: Configuration,
        base_address: str,
        api_key: str,
    ):

        super().__init__(cfg, base_address)
        self.api_client.headers.update("***": api_key))

    def get_company_host_app(self):
        resource = "***/*"
        self.log(logging.IMFO, f"fetching company app data from (resource)")
        return super()._get(resource)

    def patch_company_host_app(self, data: dict):
        resource = "****"
        self.log(logging.IMFO, f"Patching.... (resource)")
        return super()._patch(resource, data)