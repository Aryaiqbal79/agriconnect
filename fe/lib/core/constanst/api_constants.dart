import 'package:flutter/foundation.dart';

class ApiConstants {
  // -------------------------------------------------------
  // KONFIGURASI HOST BACKEND (Laravel + MySQL Lokal)
  //
  // OPSI 1 - DESKTOP/WEB (Windows, macOS, Linux):
  //   static const String _host = 'http://127.0.0.1:8000';
  //
  // OPSI 2 - ANDROID EMULATOR:
  //   Gunakan 10.0.2.2 agar emulator bisa akses host PC
  //   static const String _host = 'http://10.0.2.2:8000';
  //
  // OPSI 3 - iOS SIMULATOR:
  //   static const String _host = 'http://127.0.0.1:8000';
  //
  // OPSI 4 - PHYSICAL DEVICE (Ganti dengan IP PC di jaringan yang sama):
  //   flutter run --dart-define=API_HOST=http://192.168.1.5:8000
  //   (Contoh: cek IP PC dengan `ipconfig` di Windows)
  //
  // OPSI 5 - FLUTTER WEB:
  //   static const String _host = 'http://127.0.0.1:8000';
  // -------------------------------------------------------

  // Host yang bisa di-override via --dart-define=API_HOST=...
  static const String _configuredHost = String.fromEnvironment('API_HOST');

  // Host default untuk Android Emulator (10.0.2.2 = loopback host PC)
  static const String _androidEmulatorHost = 'http://10.0.2.2:8000';

  static String _normalizeHost(String host) {
    return host.trim().replaceAll(RegExp(r'/+$'), '');
  }

  static String get _defaultHost {
    if (kIsWeb) return 'http://127.0.0.1:8000';

    return switch (defaultTargetPlatform) {
      TargetPlatform.android => _androidEmulatorHost,
      _ => 'http://127.0.0.1:8000',
    };
  }

  static String get _host {
    if (_configuredHost.isNotEmpty) {
      // Jika API_HOST yang dikonfigurasi menunjuk ke loopback,
      // ganti dengan host emulator yang benar untuk Android
      final isAndroid =
          !kIsWeb && defaultTargetPlatform == TargetPlatform.android;
      final pointsToDeviceItself =
          _configuredHost.contains('127.0.0.1') ||
          _configuredHost.contains('localhost');
      if (isAndroid && pointsToDeviceItself) return _defaultHost;

      return _normalizeHost(_configuredHost);
    }

    return _normalizeHost(_defaultHost);
  }

  static String get baseUrl => '$_host/api';
  static String get storageUrl => '$_host/api/file';

  // Auth Endpoints
  static const String loginEndpoint = '/auth/login';
  static const String registerEndpoint = '/auth/register';
  static const String logoutEndpoint = '/auth/logout';
  static const String refreshEndpoint = '/auth/refresh';
  static const String meEndpoint = '/auth/me';
  static const String profileEndpoint = '/auth/profile';

  // Products Endpoints
  static const String productsEndpoint = '/products';
  static const String sellerProductsEndpoint = '/sellers';

  // Categories Endpoints
  static const String categoriesEndpoint = '/categories';

  // Orders Endpoints
  static const String ordersEndpoint = '/orders';

  // Planting Activities Endpoints
  static const String plantingActivitiesEndpoint = '/planting-activities';
  static const String plantingActivitiesSyncEndpoint =
      '/planting-activities/sync';

  // Farmer Lands Endpoints
  static const String farmerLandsEndpoint = '/farmer-lands';

  // Planting Schedules Endpoints
  static const String plantingSchedulesEndpoint = '/planting-schedules';

  // Cart Endpoints
  static const String cartEndpoint = '/cart';
  static const String cartItemsEndpoint = '/cart/items';

  // Reviews Endpoints
  static const String reviewsEndpoint = '/reviews';

  // Sellers Endpoints
  static const String sellersEndpoint = '/sellers';
  static const String sellerProfileEndpoint = '/sellers/profile';
  static const String sellerStatisticsEndpoint = '/sellers/statistics';

  // Admin Endpoints
  static const String adminStatisticsEndpoint = '/admin/statistics';
  static const String adminUsersEndpoint = '/admin/users';
  static const String adminReferencePricesEndpoint = '/admin/reference-prices';
  static const String adminUpdateReferencePriceEndpoint = '/admin/reference-prices/update';

  // Legacy/Deprecated
  static const String commoditiesEndpoint = '/commodities';
  static const String logsEndpoint = '/activity-logs';
  static const String chatbotMessageEndpoint = '/chatbot/message';
}
