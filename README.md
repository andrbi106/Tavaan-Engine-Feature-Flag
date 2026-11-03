# Tavaan Engine — FeatureFlag

> **پرچم قابلیت** — موتور FeatureFlag در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.feature-flag` |
| نام | `FeatureFlag` |
| عنوان فارسی | پرچم قابلیت |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\FeatureFlag` |
| نوع | `engine` |
| Facade | `Feature` (accessor: `feature`) |

## توضیحات

M6 — Targeting با قواعد role/permission/user_id/tenant/percentage/env/ip، Kill Switch فوری (cache)، درصد پایدار (crc32(seed|feature))، A/B Testing پایدار، درایورهای config/database با کش نسخه‌دار، Feature::for($user) scoped.

## Facadeها

- `Tavaan\Engine\FeatureFlag\Facades\Feature`

## کلاس‌های اصلی

- `src/FeatureEvaluator.php`
- `src/FeatureFlagResolver.php`
- `src/FeatureManager.php`
- `src/ScopedFeature.php`
- `src/feature_flag.php`

## Service Providerها

- `Tavaan\Engine\FeatureFlag\FeatureManagerServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`

**موتورهای اختیاری:**

- `cache`
- `database`
- `rbac`
- `tenancy`

## پیکربندی

- فایل پیکربندی: `config/features.php`
- کلید: `features`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Feature-Flag.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Feature-Flag`** (این مخزن) | موتور FeatureFlag |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
