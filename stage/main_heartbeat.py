def heartbeat(cfg: Configuration, service_name=None):
    try:
        license_key = cfg.get_license_key(service_name)
        client = backendclient(cfg, cfg.backend_backaddress, license_key)

        date_now = datetime.now().isoformat()

        client.patch_company_host_app{last_received_heartbeat: date_now}
        cfg.logger.write(logging_INFO, {'heartbeat send': date_new})

    except Exception:
        cfg.logger.write(logging_ERROR, f"An unexpected error occurred while trying to send a hazerbeast for age: {service_name}")