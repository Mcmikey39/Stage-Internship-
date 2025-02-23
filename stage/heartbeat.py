def Heartbeat(cfg, app_name=None):
    try:
        # Get API key from config file
        api_key = cfg.get_app_name(app_name, fallback="default_value")
        client = Backend(cfg, base_address, api_key)

        date_now = datetime.now().isoformat()

        # Send PATCH request to update the last received heartbeat
        client.patch_app({"***": date_now})
        print(f"Heartbeat sent at: {date_now}")

    except Exception as e:
        # Catch any other exceptions that may not have been anticipated
        print(f"An unexpected error occurred: {str(e)}")