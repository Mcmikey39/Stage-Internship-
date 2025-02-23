class APIKeyAuthentication(BaseAuthentication):
    def authenticate(self, request):
        api_key = request.headers.get("XXXXX")

        if not api_key:
            raise NotAuthenticated("No API key provided")

        try:
            hashed_api_key = hashlib.sha256(api_key.encode()).hexdigest()
            app = app.objects.get(api_key=hashed_api_key)
            logger.debug(f"Authenticated company host app: {app}")
        except app.DoesNotExist:
            raise AuthenticationFailed("Invalid API key")
        return (app, api_key)